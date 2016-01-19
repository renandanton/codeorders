<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Paginator\Adapter\ArrayAdapter;
use CodeOrders\V1\Rest\Users\UsersRepository;
class OrdersRepository {
	/**
	 * @var $tableGateway
	 */
	private $tableGateway;
	/**
	 * @var $orderItemTableGateway
	 */
	private $orderItemTableGateway;
	/**
	 * @var $userRepository
	 */
	private $userRepository;
	/**
	 * Constructor of class
	 * @param AbstractTableGateway $tableGataway
	 * @param AbstractTableGateway $orderItemTableGateway
	 */
	public function __construct(AbstractTableGateway $tableGataway, AbstractTableGateway $orderItemTableGateway, UsersRepository $userRepository){
		$this->tableGateway = $tableGataway;
		$this->orderItemTableGateway = $orderItemTableGateway;
		$this->userRepository = $userRepository;
	}
	/**
	 * List of all orders resources
	 */
	public function fecthAll(){
		$hydrator = new ClassMethods();
		$hydrator->addStrategy('items', new OrderItemHydratorStrategy(new ClassMethods()));
		$orders = $this->tableGateway->select();
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
	 * Insert a new resource
	 * @param array $data
	 */
	public function insert(array $data){
		$this->tableGateway->insert($data);
		$id = $this->tableGateway->getLastInsertValue();
		return $id;
	}
	/**
	 * Get user resource by username
	 * @param string $username
	 */
	public function findByUserName($username){
	  return $this->userRepository->findByUsername($username);
	}
	
	/**
	 * Find orders of a  salasman
	 * @param int $id
	 * @param int $userId
	 */
	public function findByUserAndOrder($id,$userId){
	 return $this->tableGateway->select(['id' => $id, 'user_id' => $userId]);   
	}
	
	/**
	 * Return $tableGateway
	 */
	public function getTableGateway(){
		return $this->tableGateway;
	}
}

?>