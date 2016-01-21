<?php

namespace CodeOrders\V1\Rest\Products;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\TableGateway\TableGateway;
class ProductsRepositoryFactory implements FactoryInterface {
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
	// TODO Auto-generated method stub
		$dbAdapter = $serviceLocator->get('DbAdapter');
		$hydrator = new HydratingResultSet(new ClassMethods(), new ProductsEntity());
		$tableGateway = new TableGateway('products', $dbAdapter, null, $hydrator);
		$productsRepository = new ProductsRepository($tableGateway);

		return $productsRepository;
	}


}

?>