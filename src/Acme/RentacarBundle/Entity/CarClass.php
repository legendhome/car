<?php

namespace Acme\RentacarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarClass
 *
 * @ORM\Table(name="car_class")
 * @ORM\Entity
 */
class CarClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="car_types", type="string", length=100, nullable=false)
     */
    private $carTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="seats", type="string", length=20, nullable=false)
     */
    private $seats;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="price3", type="decimal", nullable=false)
     */
    private $price3;

    /**
     * @var float
     *
     * @ORM\Column(name="price6", type="decimal", nullable=false)
     */
    private $price6;

    /**
     * @var float
     *
     * @ORM\Column(name="price12", type="decimal", nullable=false)
     */
    private $price12;

    /**
     * @var float
     *
     * @ORM\Column(name="price24", type="decimal", nullable=false)
     */
    private $price24;

    /**
     * @var float
     *
     * @ORM\Column(name="insurance_price", type="decimal", nullable=false)
     */
    private $insurancePrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;



    /**
     * Set id
     *
     * @param integer $id
     * @return CarClass
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CarClass
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set carTypes
     *
     * @param string $carTypes
     * @return CarClass
     */
    public function setCarTypes($carTypes)
    {
        $this->carTypes = $carTypes;
    
        return $this;
    }

    /**
     * Get carTypes
     *
     * @return string 
     */
    public function getCarTypes()
    {
        return $this->carTypes;
    }

    /**
     * Set seats
     *
     * @param string $seats
     * @return CarClass
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    
        return $this;
    }

    /**
     * Get seats
     *
     * @return string 
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return CarClass
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price3
     *
     * @param float $price3
     * @return CarClass
     */
    public function setPrice3($price3)
    {
        $this->price3 = $price3;
    
        return $this;
    }

    /**
     * Get price3
     *
     * @return float 
     */
    public function getPrice3()
    {
        return $this->price3;
    }

    /**
     * Set price6
     *
     * @param float $price6
     * @return CarClass
     */
    public function setPrice6($price6)
    {
        $this->price6 = $price6;
    
        return $this;
    }

    /**
     * Get price6
     *
     * @return float 
     */
    public function getPrice6()
    {
        return $this->price6;
    }

    /**
     * Set price12
     *
     * @param float $price12
     * @return CarClass
     */
    public function setPrice12($price12)
    {
        $this->price12 = $price12;
    
        return $this;
    }

    /**
     * Get price12
     *
     * @return float 
     */
    public function getPrice12()
    {
        return $this->price12;
    }

    /**
     * Set price24
     *
     * @param float $price24
     * @return CarClass
     */
    public function setPrice24($price24)
    {
        $this->price24 = $price24;
    
        return $this;
    }

    /**
     * Get price24
     *
     * @return float 
     */
    public function getPrice24()
    {
        return $this->price24;
    }

    /**
     * Set insurancePrice
     *
     * @param float $insurancePrice
     * @return CarClass
     */
    public function setInsurancePrice($insurancePrice)
    {
        $this->insurancePrice = $insurancePrice;
    
        return $this;
    }

    /**
     * Get insurancePrice
     *
     * @return float 
     */
    public function getInsurancePrice()
    {
        return $this->insurancePrice;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return CarClass
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return CarClass
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}