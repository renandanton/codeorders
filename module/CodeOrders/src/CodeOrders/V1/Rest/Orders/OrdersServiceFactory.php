<?php

namespace CodeOrders\V1\Rest\Orders;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\TableGateway\TableGateway;
class OrdersServiceFactory implements FactoryInterface {
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
		$dbAdapter = $serviceLocator->get('DbAdapter');
		$hydratorOrderItems = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());
		$orderItemTableGateway = new TableGateway('order_items', $dbAdapter, null, $hydratorOrderItems);
		$orderRepository = $serviceLocator->get('CodeOrders\\V1\\Rest\\Orders\\OrdersRepository');
		return new OrdersService($orderRepository, $orderItemTableGateway);
	}
}

?>