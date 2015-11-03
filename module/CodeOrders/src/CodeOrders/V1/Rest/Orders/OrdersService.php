<?php

namespace CodeOrders\V1\Rest\Orders;

class OrdersService {
	/**
	 * @var OrdersRepository $repository
	 */
	private $repository;
	/**
	 * Constructor of class
	 * @param OrdersRepository $repository
	 */
	public function __construct(OrdersRepository $repository){
		$this->repository = $repository;
	}
	/**
	 * Insert the order resource
	 * @param array $data
	 * @return $order
	 */
	public function insert($data){
		$order = $this->repository->insert($data);
		return $order;
	}
}

?>