<?php
namespace CodeOrders\V1\Rest\Clients;

class ClientsResourceFactory
{
    public function __invoke($services)
    {
        $repositoryClients = $services->get('CodeOrders\\V1\\Rest\\Clients\\ClientsRepository');
        $userService = $services->get('CodeOrders\\V1\\Rest\\Users\\UsersService'); 
        return new ClientsResource($repositoryClients, $userService);
    }
}
