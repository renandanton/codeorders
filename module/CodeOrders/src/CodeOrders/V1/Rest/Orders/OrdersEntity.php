<?php
namespace CodeOrders\V1\Rest\Orders;

class OrdersEntity
{
	/**
	 * @var int  $id
	 */
	protected $id;
	/**
	 * @var int $client_id
	 */
	protected $client_id;
	/**
	 * @var int $user_id
	 */
	protected $user_id;
	/**
	 * @var int $ptype_id
	 */
	protected $ptype_id;
	/**
	 * @var double $total
	 */
	protected $total;
	/**
	 * @var string $status
	 */
	protected $status;
	/**
	 * @var datetime $created_at
	 */
	protected $created_at;
	/**
	 * @var array $items
	 */
	protected $items;

	/**
	 * Constructor of class
	 */
	public function __construct(){
		$this->items = [];
	}

	/**
	 * Gets the $id.
	 *
	 * @return number
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Gets the $client_id.
	 *
	 * @return number
	 */
	public function getClientId() {
		return $this->client_id;
	}

	/**
	 * Gets the $user_id.
	 *
	 * @return number
	 */
	public function getUserId() {
		return $this->user_id;
	}

	/**
	 * Gets the $ptypes_id.
	 *
	 * @return number
	 */
	public function getPtypeId() {
		return $this->ptype_id;
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
	 * Gets the $status.
	 *
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Gets the $created_at.
	 *
	 * @return \CodeOrders\V1\Rest\Orders\datetime
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * Gets the $items.
	 *
	 * @return multitype:
	 */
	public function getItems() {
		return $this->items;
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
	 * Sets the $client_id.
	 *
	 * @param number $client_id
	 */
	public function setClientId( $client_id ) {
		$this->client_id = $client_id;
	}

	/**
	 * Sets the $user_id.
	 *
	 * @param number $user_id
	 */
	public function setUserId( $user_id ) {
		$this->user_id = $user_id;
	}

	/**
	 * Sets the $ptypes_id.
	 *
	 * @param number $ptypes_id
	 */
	public function setPtypeId( $ptype_id ) {
		$this->ptype_id = $ptype_id;
	}

	/**
	 * Sets the $total.
	 *
	 * @param number $total
	 */
	public function setTotal( $total ) {
		$this->total = $total;
	}

	/**
	 * Sets the $status.
	 *
	 * @param string $status
	 */
	public function setStatus( $status ) {
		$this->status = $status;
	}

	/**
	 * Sets the $created_at.
	 *
	 * @param \CodeOrders\V1\Rest\Orders\datetime $created_at
	 */
	public function setCreatedAt( $created_at ) {
		$this->created_at = $created_at;
	}

	/**
	 * Sets the $items.
	 *
	 * @param multitype: $items
	 */
	public function addItem( $item ) {
		$this->items[] = $item;
	}
}
