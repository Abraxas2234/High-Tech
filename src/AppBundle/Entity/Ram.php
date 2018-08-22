<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ram
 *
 * @ORM\Table(name="ram")
 * @ORM\Entity
 */
class Ram
{
    /**
     * @var int
     *
     * @ORM\Column(name="ram_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ramId;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_type", type="string", length=255, nullable=false)
     */
    private $ramType;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_capacity", type="string", length=255, nullable=false)
     */
    private $ramCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_frequency", type="string", length=255, nullable=false)
     */
    private $ramFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_timings", type="string", length=255, nullable=false)
     */
    private $ramTimings;

    /**
     * @var string
     *
     * @ORM\Column(name="ram_tension", type="string", length=255, nullable=false)
     */
    private $ramTension;



    /**
     * Get ramId.
     *
     * @return int
     */
    public function getRamId()
    {
        return $this->ramId;
    }

    /**
     * Set ramType.
     *
     * @param string $ramType
     *
     * @return Ram
     */
    public function setRamType($ramType)
    {
        $this->ramType = $ramType;

        return $this;
    }

    /**
     * Get ramType.
     *
     * @return string
     */
    public function getRamType()
    {
        return $this->ramType;
    }

    /**
     * Set ramCapacity.
     *
     * @param string $ramCapacity
     *
     * @return Ram
     */
    public function setRamCapacity($ramCapacity)
    {
        $this->ramCapacity = $ramCapacity;

        return $this;
    }

    /**
     * Get ramCapacity.
     *
     * @return string
     */
    public function getRamCapacity()
    {
        return $this->ramCapacity;
    }

    /**
     * Set ramFrequency.
     *
     * @param string $ramFrequency
     *
     * @return Ram
     */
    public function setRamFrequency($ramFrequency)
    {
        $this->ramFrequency = $ramFrequency;

        return $this;
    }

    /**
     * Get ramFrequency.
     *
     * @return string
     */
    public function getRamFrequency()
    {
        return $this->ramFrequency;
    }

    /**
     * Set ramTimings.
     *
     * @param string $ramTimings
     *
     * @return Ram
     */
    public function setRamTimings($ramTimings)
    {
        $this->ramTimings = $ramTimings;

        return $this;
    }

    /**
     * Get ramTimings.
     *
     * @return string
     */
    public function getRamTimings()
    {
        return $this->ramTimings;
    }

    /**
     * Set ramTension.
     *
     * @param string $ramTension
     *
     * @return Ram
     */
    public function setRamTension($ramTension)
    {
        $this->ramTension = $ramTension;

        return $this;
    }

    /**
     * Get ramTension.
     *
     * @return string
     */
    public function getRamTension()
    {
        return $this->ramTension;
    }
}
