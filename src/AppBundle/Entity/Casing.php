<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casing
 *
 * @ORM\Table(name="casing")
 * @ORM\Entity
 */
class Casing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="casing_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $casingId;

    /**
     * @var string
     *
     * @ORM\Column(name="casing_format", type="string", length=255, nullable=false)
     */
    private $casingFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="casing_color", type="string", length=255, nullable=false)
     */
    private $casingColor;

    /**
     * @var string
     *
     * @ORM\Column(name="casing_material", type="string", length=255, nullable=false)
     */
    private $casingMaterial;



    /**
     * Get casingId
     *
     * @return integer
     */
    public function getCasingId()
    {
        return $this->casingId;
    }

    /**
     * Set casingFormat
     *
     * @param string $casingFormat
     *
     * @return Casing
     */
    public function setCasingFormat($casingFormat)
    {
        $this->casingFormat = $casingFormat;

        return $this;
    }

    /**
     * Get casingFormat
     *
     * @return string
     */
    public function getCasingFormat()
    {
        return $this->casingFormat;
    }

    /**
     * Set casingColor
     *
     * @param string $casingColor
     *
     * @return Casing
     */
    public function setCasingColor($casingColor)
    {
        $this->casingColor = $casingColor;

        return $this;
    }

    /**
     * Get casingColor
     *
     * @return string
     */
    public function getCasingColor()
    {
        return $this->casingColor;
    }

    /**
     * Set casingMaterial
     *
     * @param string $casingMaterial
     *
     * @return Casing
     */
    public function setCasingMaterial($casingMaterial)
    {
        $this->casingMaterial = $casingMaterial;

        return $this;
    }

    /**
     * Get casingMaterial
     *
     * @return string
     */
    public function getCasingMaterial()
    {
        return $this->casingMaterial;
    }
}
