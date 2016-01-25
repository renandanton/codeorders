<?php
namespace CodeOrders\V1\Rest\Clients;

class ClientsService
{
    /**
     * @var ClientsRepository $repository
     */
    private $repository;
    
    public function __construct(ClientsRepository $repository){
        $this->repository = $repository;
    }
    
}

?>