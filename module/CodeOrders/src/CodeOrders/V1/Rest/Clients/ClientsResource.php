<?php
namespace CodeOrders\V1\Rest\Clients;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use CodeOrders\V1\Rest\Users\UsersService;


class ClientsResource extends AbstractResourceListener
{
    /**
     * @var ClientsRepository $repository
     */
    private $repository;
    
    /**
     * @var UsersService $userService
     */
    private $userService;
    
    public function __construct(ClientsRepository $respository, UsersService $userService){
        $this->repository = $respository;
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
        if(!$this->userService->isAdmin())
            return new ApiProblem(403, 'Only admin can create clients.' );
        
        return $this->repository->insert($data);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        if(!$this->userService->isAdmin())
            return new ApiProblem(403, 'Only admin can delete clients.' );
        
        return $this->repository->delete($id);
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
        return $this->repository->find($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        return $this->repository->findAll();
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
       if(!$this->userService->isAdmin())
            return new ApiProblem(403, 'Only admin can update clients.' );
        
        return $this->repository->update($id, $data);
    }
}
