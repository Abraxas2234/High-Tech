<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billing
 *
 * @ORM\Table(name="billing")
 * @ORM\Entity
 */
class Billing
{
    /**
     * @var int
     *
     * @ORM\Column(name="billing_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $billingId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_adress", type="string", length=255, nullable=false)
     */
    private $billingAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_zip_code", type="string", length=255, nullable=false)
     */
    private $billingZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_city", type="string", length=255, nullable=false)
     */
    private $billingCity;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_country", type="string", length=255, nullable=false)
     */
    private $billingCountry;



    /**
     * Get billingId.
     *
     * @return int
     */
    public function getBillingId()
    {
        return $this->billingId;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Billing
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
     * Set billingAdress.
     *
     * @param string $billingAdress
     *
     * @return Billing
     */
    public function setBillingAdress($billingAdress)
    {
        $this->billingAdress = $billingAdress;

        return $this;
    }

    /**
     * Get billingAdress.
     *
     * @return string
     */
    public function getBillingAdress()
    {
        return $this->billingAdress;
    }

    /**
     * Set billingZipCode.
     *
     * @param string $billingZipCode
     *
     * @return Billing
     */
    public function setBillingZipCode($billingZipCode)
    {
        $this->billingZipCode = $billingZipCode;

        return $this;
    }

    /**
     * Get billingZipCode.
     *
     * @return string
     */
    public function getBillingZipCode()
    {
        return $this->billingZipCode;
    }

    /**
     * Set billingCity.
     *
     * @param string $billingCity
     *
     * @return Billing
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    /**
     * Get billingCity.
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set billingCountry.
     *
     * @param string $billingCountry
     *
     * @return Billing
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    /**
     * Get billingCountry.
     *
     * @return string
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }
}
