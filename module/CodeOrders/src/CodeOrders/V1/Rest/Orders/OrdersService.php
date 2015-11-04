<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\Stdlib\Hydrator\ObjectProperty;
use Zend\Db\TableGateway\AbstractTableGateway;
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
}

?>