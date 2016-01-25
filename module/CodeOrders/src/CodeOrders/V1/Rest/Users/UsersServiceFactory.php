<?php
namespace CodeOrders\V1\Rest\Users;

use Zend\ServiceManager\FactoryInterface;
class UsersServiceFactory implements FactoryInterface{
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
	    
	    $repository = $serviceLocator->get('CodeOrders\\V1\\Rest\\Users\\UsersRepository');
	    $auth = $serviceLocator->get('api-identity');
		
		return new UsersService($repository, $auth);
	}
}

?>