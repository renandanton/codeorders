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
	 * Constructor of class
	 * @param TableGatewayInterface $tableGateway
	 */
	public function __construct(TableGatewayInterface $tableGateway){
		$this->tableGateway = $tableGateway;
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