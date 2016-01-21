<?php
namespace CodeOrders\V1\Rest\Products;

class ProductsResourceFactory
{
    public function __invoke($services)
    {
        $repository = $services->get("CodeOrders\\V1\\Rest\\Products\\ProductsRepository");
        $userService = $services->get("CodeOrders\\V1\\Rest\\Users\\UsersService");
        return new ProductsResource($repository, $userService);
    }
}
