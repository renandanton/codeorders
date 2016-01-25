<?php
namespace CodeOrders\V1\Rest\Clients;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use ZF\ApiProblem\ApiProblem;

class ClientsRepository
{
    /**
     * @var TableGatewayInterface $tableGateway
     */
    private $tableGateway;
    
    
    public function __construct(TableGatewayInterface $tableGateway){
        $this->tableGateway = $tableGateway;
    }
    
    /**
     * List all itens of resource
     */
    public function findAll(){
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ClientsCollection($paginatorAdapter);
    }
    
    /**
     * Get only one item of resource
     */
    public function find($id){
        $resultSet = $this->tableGateway->select(["id" => (int)$id]);
        $result = $resultSet->current();
        if(!$result)
            return new ApiProblem(415, "Unsupported Media Type");
        return $result;
    }
    /**
     * Insert a new resource
     */
    public function insert($clientsEntity){
        return $this->tableGateway->insert((array)$clientsEntity);
    }
    /**
     * Update a resource
     */
    public function update($id ,$clientsEntity){
        if(!$id)
            return new ApiProblem(415, "Unsupported Media Type");
        $this->tableGateway->update((array)$clientsEntity, ["id" =>$id] );
        return $this->find($id);
    }
    /**
     * Delete one resouce
     */
    public function delete($id){
        if(!$id)
            return new ApiProblem(415, "Unsupported Media Type");
        $this->tableGateway->delete(['id' => (int)$id]);
        return true;
    }
    
    
}

?>