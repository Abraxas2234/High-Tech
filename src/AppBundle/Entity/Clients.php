<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=255, nullable=false)
     */
    private $clientName;

    /**
     * @var string
     *
     * @ORM\Column(name="client_firstname", type="string", length=255, nullable=false)
     */
    private $clientFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="client_password", type="string", length=255, nullable=false)
     */
    private $clientPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="client_phone", type="string", length=255, nullable=false)
     */
    private $clientPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="client_adress", type="string", length=255, nullable=false)
     */
    private $clientAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="client_zip_code", type="string", length=255, nullable=false)
     */
    private $clientZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="client_city", type="string", length=255, nullable=false)
     */
    private $clientCity;

    /**
     * @var string
     *
     * @ORM\Column(name="client_country", type="string", length=255, nullable=false)
     */
    private $clientCountry;



    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set clientName
     *
     * @param string $clientName
     *
     * @return Clients
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set clientFirstname
     *
     * @param string $clientFirstname
     *
     * @return Clients
     */
    public function setClientFirstname($clientFirstname)
    {
        $this->clientFirstname = $clientFirstname;

        return $this;
    }

    /**
     * Get clientFirstname
     *
     * @return string
     */
    public function getClientFirstname()
    {
        return $this->clientFirstname;
    }

    /**
     * Set clientPassword
     *
     * @param string $clientPassword
     *
     * @return Clients
     */
    public function setClientPassword($clientPassword)
    {
        $this->clientPassword = $clientPassword;

        return $this;
    }

    /**
     * Get clientPassword
     *
     * @return string
     */
    public function getClientPassword()
    {
        return $this->clientPassword;
    }

    /**
     * Set clientPhone
     *
     * @param string $clientPhone
     *
     * @return Clients
     */
    public function setClientPhone($clientPhone)
    {
        $this->clientPhone = $clientPhone;

        return $this;
    }

    /**
     * Get clientPhone
     *
     * @return string
     */
    public function getClientPhone()
    {
        return $this->clientPhone;
    }

    /**
     * Set clientAdress
     *
     * @param string $clientAdress
     *
     * @return Clients
     */
    public function setClientAdress($clientAdress)
    {
        $this->clientAdress = $clientAdress;

        return $this;
    }

    /**
     * Get clientAdress
     *
     * @return string
     */
    public function getClientAdress()
    {
        return $this->clientAdress;
    }

    /**
     * Set clientZipCode
     *
     * @param string $clientZipCode
     *
     * @return Clients
     */
    public function setClientZipCode($clientZipCode)
    {
        $this->clientZipCode = $clientZipCode;

        return $this;
    }

    /**
     * Get clientZipCode
     *
     * @return string
     */
    public function getClientZipCode()
    {
        return $this->clientZipCode;
    }

    /**
     * Set clientCity
     *
     * @param string $clientCity
     *
     * @return Clients
     */
    public function setClientCity($clientCity)
    {
        $this->clientCity = $clientCity;

        return $this;
    }

    /**
     * Get clientCity
     *
     * @return string
     */
    public function getClientCity()
    {
        return $this->clientCity;
    }

    /**
     * Set clientCountry
     *
     * @param string $clientCountry
     *
     * @return Clients
     */
    public function setClientCountry($clientCountry)
    {
        $this->clientCountry = $clientCountry;

        return $this;
    }

    /**
     * Get clientCountry
     *
     * @return string
     */
    public function getClientCountry()
    {
        return $this->clientCountry;
    }
}
