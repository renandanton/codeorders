<?php
namespace CodeOrders\V1\Rest\Clients;

class ClientsEntity
{
    /**
     * @var int $id
     */
    private $id;
    /**
     * @var string $name
     */
    private $name;
    /**
     * @var string $document
     */
    private $document;
    /**
     * @var string $address
     */
    private $address;
    /**
     * @var string $zipcode
     */
    private $zipcode;
    /**
     * @var string $city
     */
    private $city;
    /**
     * @var string $state
     */
    private $state;
    /**
     * @var string $responsible
     */
    private $responsible;
    /**
     * @var string $email
     */
    private $email;
    /**
     * @var string $phone
     */
    private $phone;
    /**
     * @var string $obs
     */
    private $obs;
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return the $zipcode
     */
    public function getZipCode()
    {
        return $this->zipcode;
    }

    /**
     * @return the $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return the $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return the $responsible
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return the $obs
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param string $zipcode
     */
    public function setZipCode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param string $responsible
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
    }

    
    
    
    
}
