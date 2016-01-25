<?php
namespace CodeOrders\V1\Rest\Users;



class UsersService
{
    
    /**
     * @var UsersRepository $repository
     */
    private $repository;
    /**
     * @param  ZF\MvcAuth\Identity\AuthenticatedIdentity $auth
     */
    private $auth;

    public function __construct(UsersRepository $repository,  $auth){
        $this->repository = $repository;
        $this->auth = $auth;
    }
    
    /**
     * Get user info
     * @return CodeOrders\V1\Rest\Users\UsersEntity
     */
    public function getUserInfo(){
        return $this->repository->findByUserName($this->auth->getRoleId());
    }
    
    /**
     * Method check if user is salesman
     * @return bool
     */
    public function isSalesMan(){
        $user = $this->getUserInfo();
        if($user->getRole() == 'salesman')
            return true;
        else
            return false;
    }
    
    /**
     * Method check if user is admin
     * @return bool
     */
    public function isAdmin(){
        $user = $this->getUserInfo();
        if($user->getRole() == 'admin')
            return true;
        else
            return false;
    }
    
}

?>