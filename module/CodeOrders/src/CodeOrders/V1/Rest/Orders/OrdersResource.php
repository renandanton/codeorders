<?php
namespace CodeOrders\V1\Rest\Orders;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use CodeOrders\V1\Rest\Users\UsersService;



class OrdersResource extends AbstractResourceListener
{
	/**
	 * @var OrdersRepository $repository
	 */
	private $repository;
	/**
	 * @var OrderService $orderService
	 */
	private $orderService;
	/**
	 * @var UserService $userService
	 */
	private $userService;
	

	/**
	 * Constructor of class
	 */
	public function __construct(OrdersRepository $repository, OrdersService $orderService, UsersService $userService){
		$this->repository = $repository;
		$this->orderService = $orderService;
		$this->userService = $userService;
	}

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
     
        if(!$this->userService->isSalesMan())
            return new ApiProblem(403, 'Only salesman can create orders.' );
        
        $result =  $this->orderService->insert($data);
        if($result == 'error')
        	return new ApiProblem(405, 'Error processing order');
        else
        	return $result;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
      $user = $this->userService->getUserInfo();

      if(!$this->userService->isSalesMan())
            return new ApiProblem(415, 'Only salesman can list your own orders.' );

       return $this->orderService->fetch($id, $user->getId());
 
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
      if(!$this->userService->isSalesMan())
            return new ApiProblem(415, 'Only admin can see all orders.' );
        
       return  $this->orderService->fetchAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
