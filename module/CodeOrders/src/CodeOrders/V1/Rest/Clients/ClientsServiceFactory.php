<?php
namespace CodeOrders\V1\Rest\Clients;

use Zend\ServiceManager\FactoryInterface;
class ClientsServiceFactory implements FactoryInterface
{
    
    /**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\FactoryInterface::createService()
	 */
	public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
        return new ClientsService($serviceLocator->get('CodeOrders\\V1\\Rest\\Clients\\ClientsRepository'));
    }
}

?>