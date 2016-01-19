<?php

namespace CodeOrders\V1\Rest\Users;

use Zend\Stdlib\Hydrator\HydratorInterface;
class UsersMapper extends UsersEntity implements HydratorInterface {
	/**
	 * {@inheritDoc}
	 * @see \Zend\Stdlib\Extractor\ExtractionInterface::extract()
	 */
	public function extract( $object ) {
		// TODO Auto-generated method stub
		return [
			'id' => $object->id,
			'username' => $object->username,
			'password' => $object->password,
			'first_name' => $object->first_name,
			'last_name' => $object->last_name,
			'role' => $object->role
		];
	}

	/**
	 * {@inheritDoc}
	 * @see \Zend\Stdlib\Hydrator\HydrationInterface::hydrate()
	 */
	public function hydrate( array $data, $object ) {
		// TODO Auto-generated method stub
		$object->id = $data['id'];
		$object->username = $data['username'];
		$object->password = $data['password'];
		$object->first_name = $data['first_name'];
		$object->last_name = $data['last_name'];
		$object->role = $data['role'];
		return $object;
	}
}

?>