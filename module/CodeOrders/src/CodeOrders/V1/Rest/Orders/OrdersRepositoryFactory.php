<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\TableGateway\TableGateway;
class OrdersRepositoryFactory implements FactoryInterface{
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
		// TODO Auto-generated method stub
		$dbAdapter = $serviceLocator->get('DbAdapter');
		$hydratorOrders = new HydratingResultSet(new ClassMethods(), new OrdersEntity());
		$hydratorOrderItems = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());
		$tableGateway = new TableGateway('orders', $dbAdapter, null, $hydratorOrders);
		$orderItemTableGateway = new TableGateway('order_items', $dbAdapter, null, $hydratorOrderItems);
		$ordersRepository = new OrdersRepository($tableGateway, $orderItemTableGateway);
		return $ordersRepository;
	}


}

?>