<?php

namespace CodeOrders\V1\Rest\Products;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use ZF\ApiProblem\ApiProblem;
use CodeOrders\V1\Rest\Users\UsersRepository;
class ProductsRepository {

	/**
	 * @var TableGatewayInterface
	 */
	private $tableGateway;
	/**
	 * @var userRepository $userRepository
	 */
	private $userRepository;

	/**
	 * Constructor of class
	 * @param TableGatewayInterface $tableGateway
	 */
	public function __construct(TableGatewayInterface $tableGateway, UsersRepository $userRepository){
		$this->tableGateway = $tableGateway;
		$this->userRepository = $userRepository;
	}
	/**
	 * List all resources
	 */
	public function findAll(){
		$tableGateway = $this->tableGateway;
		$paginatorAdapter = new DbTableGateway($tableGateway);
		return new ProductsCollection($paginatorAdapter);
	}
	/**
	 * Get only one item of resource
	 * @param int $id
	 */
	public function find($id){
		$resultSet = $this->tableGateway->select(['id' => (int)$id]);
		$result = $resultSet->current();
		return $result;
	}
	/**
	 * Get user resource by username
	 * @param string $username
	 */
	public function findByUserName($username){
	    return $this->userRepository->findByUsername($username);
	}
	/**
	 * Insert a product resource
	 * @param stdClass $productEntity
	 */
	public function insert($productEntity){
		return $this->tableGateway->insert((array) $productEntity);
	}
	/**
	 * Update a product resource
	 * @param int $id
	 * @param stdClass $data
	 */
	public function update($id, $data){
		if(!$id)
			return new ApiProblem(415, "Unsupported Media Type");
		$this->tableGateway->update((array)$data, ["id" => (int)$id]);
		return $this->find($id);
	}
	/**
	 * Delete a product resource
	 * @param int $id
	 */
	public function delete($id){
		if(!$id)
			return new ApiProblem(415, "Unsupported Media Type");
		$this->tableGateway->delete(['id' => (int)$id]);
		return true;
	}
}

?>