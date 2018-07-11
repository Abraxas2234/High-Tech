<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PowerSupply
 *
 * @ORM\Table(name="power_supply")
 * @ORM\Entity
 */
class PowerSupply
{
    /**
     * @var integer
     *
     * @ORM\Column(name="power_supply_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $powerSupplyId;

    /**
     * @var string
     *
     * @ORM\Column(name="power_supply_power", type="string", length=255, nullable=false)
     */
    private $powerSupplyPower;

    /**
     * @var string
     *
     * @ORM\Column(name="power_supply_modularity", type="string", length=255, nullable=false)
     */
    private $powerSupplyModularity;

    /**
     * @var string
     *
     * @ORM\Column(name="power_supply_certification", type="string", length=255, nullable=false)
     */
    private $powerSupplyCertification;



    /**
     * Get powerSupplyId
     *
     * @return integer
     */
    public function getPowerSupplyId()
    {
        return $this->powerSupplyId;
    }

    /**
     * Set powerSupplyPower
     *
     * @param string $powerSupplyPower
     *
     * @return PowerSupply
     */
    public function setPowerSupplyPower($powerSupplyPower)
    {
        $this->powerSupplyPower = $powerSupplyPower;

        return $this;
    }

    /**
     * Get powerSupplyPower
     *
     * @return string
     */
    public function getPowerSupplyPower()
    {
        return $this->powerSupplyPower;
    }

    /**
     * Set powerSupplyModularity
     *
     * @param string $powerSupplyModularity
     *
     * @return PowerSupply
     */
    public function setPowerSupplyModularity($powerSupplyModularity)
    {
        $this->powerSupplyModularity = $powerSupplyModularity;

        return $this;
    }

    /**
     * Get powerSupplyModularity
     *
     * @return string
     */
    public function getPowerSupplyModularity()
    {
        return $this->powerSupplyModularity;
    }

    /**
     * Set powerSupplyCertification
     *
     * @param string $powerSupplyCertification
     *
     * @return PowerSupply
     */
    public function setPowerSupplyCertification($powerSupplyCertification)
    {
        $this->powerSupplyCertification = $powerSupplyCertification;

        return $this;
    }

    /**
     * Get powerSupplyCertification
     *
     * @return string
     */
    public function getPowerSupplyCertification()
    {
        return $this->powerSupplyCertification;
    }
}
