<?php
namespace CodeOrders\V1\Rest\Users;

/**
 * @author Renan Danton
 *
 */
class UsersEntity
{

	/**
	 * @var $id
	 */
	protected $id;
	/**
	 * @var $username
	 */
	protected $username;
	/**
	 * @var $password
	 */
	protected $password;
	/**
	 * @var $first_name
	 */
	protected $first_name;
	/**
	 * @var $last_name
	 */
	protected $last_name;
	/**
	 * @var $role
	 */
	protected $role;

	/**
	 * Gets the $id.
	 *
	 * @return field_type
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the $id.
	 *
	 * @param field_type $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * Gets the $username.
	 *
	 * @return field_type
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * Sets the $username.
	 *
	 * @param field_type $username
	 */
	public function setUsername( $username ) {
		$this->username = $username;
	}

	/**
	 * Gets the $password.
	 *
	 * @return field_type
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Sets the $password.
	 *
	 * @param field_type $password
	 */
	public function setPassword( $password ) {
		$this->password = $password;
	}

	/**
	 * Gets the $first_name.
	 *
	 * @return field_type
	 */
	public function getFirstName() {
		return $this->first_name;
	}

	/**
	 * Sets the $first_name.
	 *
	 * @param field_type $first_name
	 */
	public function setFirstName( $first_name ) {
		$this->first_name = $first_name;
	}

	/**
	 * Gets the $last_name.
	 *
	 * @return field_type
	 */
	public function getLastName() {
		return $this->last_name;
	}

	/**
	 * Sets the $last_name.
	 *
	 * @param field_type $last_name
	 */
	public function setLastName( $last_name ) {
		$this->last_name = $last_name;
	}

	/**
	 * Gets the $role.
	 *
	 * @return field_type
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets the $role.
	 *
	 * @param field_type $role
	 */
	public function setRole( $role ) {
		$this->role = $role;
	}


}
