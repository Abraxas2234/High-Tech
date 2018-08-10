<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery")
 * @ORM\Entity
 */
class Delivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="delivery_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $deliveryId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_adress", type="string", length=255, nullable=false)
     */
    private $deliveryAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_zip_code", type="string", length=255, nullable=false)
     */
    private $deliveryZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_city", type="string", length=255, nullable=false)
     */
    private $deliveryCity;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_country", type="string", length=255, nullable=false)
     */
    private $deliveryCountry;



    /**
     * Get deliveryId.
     *
     * @return int
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Delivery
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set deliveryAdress.
     *
     * @param string $deliveryAdress
     *
     * @return Delivery
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;

        return $this;
    }

    /**
     * Get deliveryAdress.
     *
     * @return string
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * Set deliveryZipCode.
     *
     * @param string $deliveryZipCode
     *
     * @return Delivery
     */
    public function setDeliveryZipCode($deliveryZipCode)
    {
        $this->deliveryZipCode = $deliveryZipCode;

        return $this;
    }

    /**
     * Get deliveryZipCode.
     *
     * @return string
     */
    public function getDeliveryZipCode()
    {
        return $this->deliveryZipCode;
    }

    /**
     * Set deliveryCity.
     *
     * @param string $deliveryCity
     *
     * @return Delivery
     */
    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;

        return $this;
    }

    /**
     * Get deliveryCity.
     *
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    /**
     * Set deliveryCountry.
     *
     * @param string $deliveryCountry
     *
     * @return Delivery
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;

        return $this;
    }

    /**
     * Get deliveryCountry.
     *
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }
}
