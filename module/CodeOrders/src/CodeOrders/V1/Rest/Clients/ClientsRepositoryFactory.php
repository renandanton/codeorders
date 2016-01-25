<?php
namespace CodeOrders\V1\Rest\Clients;

use Zend\ServiceManager\FactoryInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\TableGateway\TableGateway;
class ClientsRepositoryFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService( \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator ) {
        $dbAdapter = $serviceLocator->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new ClientsEntity());
        $tableGateway = new TableGateway('clients', $dbAdapter, null, $hydrator);
        $clientsRepository = new ClientsRepository($tableGateway);
        return $clientsRepository;
    }
}

?>