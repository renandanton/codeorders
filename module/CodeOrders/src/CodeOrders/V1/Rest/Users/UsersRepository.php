<?php

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use ZF\ApiProblem\ApiProblem;
class UsersRepository {

	/**
	 * @var TableGatewayInterface
	 */
	private $tableGateway;
	/**
	 * Constructor of class
	 * @param TableGatewayInterface $tableGateway
	 */
	public function __construct(TableGatewayInterface $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	/**
	 * List all itens of resource
	 */
	public function findAll(){
		$tableGateway = $this->tableGateway;
		$paginatorAdapter = new DbTableGateway($tableGateway);
		return new UsersCollection($paginatorAdapter);
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
	 * Get user resource by username
	 * @param string $username
	 */
	public function findByUsername($username){
		return $this->tableGateway->select(['username' => $username])->current();
	}
	/**
	 * Insert a new resource
	 */
	public function insert($userEntity){
		return $this->tableGateway->insert((array)$userEntity);
	}
	/**
	 * Update a resource
	 */
	public function update($id ,$userEntity){
		if(!$id)
			return new ApiProblem(415, "Unsupported Media Type");
		$this->tableGateway->update((array)$userEntity, ["id" =>$id] );
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