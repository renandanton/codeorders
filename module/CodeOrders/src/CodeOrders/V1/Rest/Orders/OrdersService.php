<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Stdlib\Hydrator\ObjectProperty;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Paginator\Adapter\ArrayAdapter;
class OrdersService {
	/**
	 * @var $tableGateway
	 */
	private $repository;
	/**
	 * @var $orderItemTableGateway
	 */
	private $orderItemTableGateway;
	/**
	 * Constructor of class
	 * @param OrdersRepository $tableGataway
	 * @param AbstractTableGateway $orderItemTableGateway
	 */
	public function __construct(OrdersRepository $repository, AbstractTableGateway $orderItemTableGateway){
		$this->repository = $repository;
		$this->orderItemTableGateway = $orderItemTableGateway;
	}
	/**
	 * Insert the order resource
	 * @param stdClass $data
	 * @return $order
	 */
	public function insert($data){
		$hydrate = new ObjectProperty();
		$data = $hydrate->extract($data);
		$orderData = $data;
		unset($orderData['item']);
		$items = $data['item'];

		$tableGateway = $this->repository->getTableGateway();
		/**
		 * Watching transactions in orders
		 */
		try {
			$tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
			$orderId = $this->repository->insert($orderData);
			foreach($items as $item){
				$item['order_id'] = $orderId;
				$this->insertItem($item);
			}
			$tableGateway->getAdapter()->getDriver()->getConnection()->commit();
			return ['order_id' => $orderId];
		}catch (\Exception $e){
			$tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
			return 'error';
		}
	}
	/**
	 * Insert items
	 * @param array $data
	 */
	public function insertItem(array $data){
		$this->orderItemTableGateway->insert($data);
		$orderItemId =  $this->orderItemTableGateway->getLastInsertValue();
		return $orderItemId;
	}
	
	/**
	 * List only one order pass through $id
	 * @param string $role
	 */
	public function fetchAll($role){
	    
	   return $this->repository->fetchAll();
	}
	
	
	/**
	 * List only one order pass through $id
	 * @param int $id 
	 * @param int $userId
	 */
	public function fetch($id, $userId){
	    $hydrator = new ClassMethods();
	    $hydrator->addStrategy('items', new OrderItemHydratorStrategy(new ClassMethods()));
	    $orders = $this->repository->findByUserAndOrder($id, $userId );
	    $result = [];
	    foreach ($orders as $order){
	        $items = $this->orderItemTableGateway->select(['order_id' => $order->getId()]);
	        foreach ($items as $item)
	            $order->addItem($item);
	        $result[] = $hydrator->extract($order);
	    }
	    $arrayAdapter = new ArrayAdapter($result);
	    $ordersCollection = new OrdersCollection($arrayAdapter);
	    return $ordersCollection;
	}
	
	
	/**
	 * Method check if user is salesman 
	 * @param string $role
	 */
	 public function isSalesman($role){
	     if($role == 'salesman')
	        return true;
	     else
	         return false;
	 }
	 
	 /**
	  * Method check if user is admin
	  * @param string $role
	  */
	 public function isAdmin($role){
	     if($role == 'admin')
	         return true;
	     else
	         return false;
	 }
}

?>