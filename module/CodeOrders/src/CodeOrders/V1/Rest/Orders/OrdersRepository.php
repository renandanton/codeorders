<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Paginator\Adapter\ArrayAdapter;
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
	 * Constructor of class
	 * @param AbstractTableGateway $tableGataway
	 * @param AbstractTableGateway $orderItemTableGateway
	 */
	public function __construct(AbstractTableGateway $tableGataway, AbstractTableGateway $orderItemTableGateway){
		$this->tableGateway = $tableGataway;
		$this->orderItemTableGateway = $orderItemTableGateway;
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
	 * Return $tableGateway
	 */
	public function getTableGateway(){
		return $this->tableGateway;
	}
}

?>