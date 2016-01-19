<?php

namespace CodeOrders\V1\Rest\Users;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Stdlib\Hydrator\ClassMethods;

class UsersRepositoryFactory implements FactoryInterface{
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
		// TODO Auto-generated method stub
		$dbAdapter = $serviceLocator->get('DbAdapter');
		//$usersMapper = new UsersMapper();
		$hydrator = new HydratingResultSet(new ClassMethods(), new UsersEntity());
		$tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);
		$usersRepository = new UsersRepository($tableGateway);

		return $usersRepository;
	}

}

?>