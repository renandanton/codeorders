<?php

namespace CodeOrders\V1\Rest\Orders;

class OrderItemEntity {
	/**
	 * @var int $id
	 */
	protected $id;
	/**
	 * @var int $order_id;
	 */
	protected $order_id;
	/**
	 * @var int $product_id;
	 */
	protected $product_id;
	/**
	 * @var int $quantity
	 */
	protected $quantity;
	/**
	 * @var double $price;
	 */
	protected $price;
	/**
	 * @var int $total
	 */
	protected $total;
	/**
	 * Gets the $id.
	 *
	 * @return number
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the $order_id.
	 *
	 * @return field_type
	 */
	public function getOrderId() {
		return $this->order_id;
	}

	/**
	 * Gets the $product_id.
	 *
	 * @return field_type
	 */
	public function getProductId() {
		return $this->product_id;
	}

	/**
	 * Gets the $quantity.
	 *
	 * @return number
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Gets the $price.
	 *
	 * @return field_type
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Gets the $total.
	 *
	 * @return number
	 */
	public function getTotal() {
		return $this->total;
	}

	/**
	 * Sets the $id.
	 *
	 * @param number $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * Sets the $order_id.
	 *
	 * @param field_type $order_id
	 */
	public function setOrderId( $order_id ) {
		$this->order_id = $order_id;
	}

	/**
	 * Sets the $product_id.
	 *
	 * @param field_type $product_id
	 */
	public function setProductId( $product_id ) {
		$this->product_id = $product_id;
	}

	/**
	 * Sets the $quantity.
	 *
	 * @param number $quantity
	 */
	public function setQuantity( $quantity ) {
		$this->quantity = $quantity;
	}

	/**
	 * Sets the $price.
	 *
	 * @param field_type $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}

	/**
	 * Sets the $total.
	 *
	 * @param number $total
	 */
	public function setTotal( $total ) {
		$this->total = $total;
	}

}

?>