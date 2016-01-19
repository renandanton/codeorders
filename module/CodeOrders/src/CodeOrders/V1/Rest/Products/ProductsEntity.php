<?php
namespace CodeOrders\V1\Rest\Products;

class ProductsEntity
{
	/**
	 * @var $id
	 */
	protected $id;
	/**
	 * @var string $name
	 */
	protected $name;
	/**
	 * @var string $description
	 */
	protected $description;
	/**
	 * @var double $price
	 */
	protected $price;
	/**
	 * Gets the $id.
	 *
	 * @return field_type
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the $name.
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Gets the $description.
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Gets the $price.
	 *
	 * @return number
	 */
	public function getPrice() {
		return $this->price;
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
	 * Sets the $name.
	 *
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * Sets the $description.
	 *
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * Sets the $price.
	 *
	 * @param number $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}




}
