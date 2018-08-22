<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motherboard
 *
 * @ORM\Table(name="motherboard")
 * @ORM\Entity
 */
class Motherboard
{
    /**
     * @var int
     *
     * @ORM\Column(name="motherboard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $motherboardId;

    /**
     * @var string
     *
     * @ORM\Column(name="motherboard_socket", type="string", length=255, nullable=false)
     */
    private $motherboardSocket;

    /**
     * @var string
     *
     * @ORM\Column(name="motherboard_chipset", type="string", length=255, nullable=false)
     */
    private $motherboardChipset;

    /**
     * @var string
     *
     * @ORM\Column(name="motherboard_ports", type="string", length=255, nullable=false)
     */
    private $motherboardPorts;

    /**
     * @var string
     *
     * @ORM\Column(name="motherboard_max_freq", type="string", length=255, nullable=false)
     */
    private $motherboardMaxFreq;

    /**
     * @var string
     *
     * @ORM\Column(name="motherboard_sata_controller", type="string", length=255, nullable=false)
     */
    private $motherboardSataController;



    /**
     * Get motherboardId.
     *
     * @return int
     */
    public function getMotherboardId()
    {
        return $this->motherboardId;
    }

    /**
     * Set motherboardSocket.
     *
     * @param string $motherboardSocket
     *
     * @return Motherboard
     */
    public function setMotherboardSocket($motherboardSocket)
    {
        $this->motherboardSocket = $motherboardSocket;

        return $this;
    }

    /**
     * Get motherboardSocket.
     *
     * @return string
     */
    public function getMotherboardSocket()
    {
        return $this->motherboardSocket;
    }

    /**
     * Set motherboardChipset.
     *
     * @param string $motherboardChipset
     *
     * @return Motherboard
     */
    public function setMotherboardChipset($motherboardChipset)
    {
        $this->motherboardChipset = $motherboardChipset;

        return $this;
    }

    /**
     * Get motherboardChipset.
     *
     * @return string
     */
    public function getMotherboardChipset()
    {
        return $this->motherboardChipset;
    }

    /**
     * Set motherboardPorts.
     *
     * @param string $motherboardPorts
     *
     * @return Motherboard
     */
    public function setMotherboardPorts($motherboardPorts)
    {
        $this->motherboardPorts = $motherboardPorts;

        return $this;
    }

    /**
     * Get motherboardPorts.
     *
     * @return string
     */
    public function getMotherboardPorts()
    {
        return $this->motherboardPorts;
    }

    /**
     * Set motherboardMaxFreq.
     *
     * @param string $motherboardMaxFreq
     *
     * @return Motherboard
     */
    public function setMotherboardMaxFreq($motherboardMaxFreq)
    {
        $this->motherboardMaxFreq = $motherboardMaxFreq;

        return $this;
    }

    /**
     * Get motherboardMaxFreq.
     *
     * @return string
     */
    public function getMotherboardMaxFreq()
    {
        return $this->motherboardMaxFreq;
    }

    /**
     * Set motherboardSataController.
     *
     * @param string $motherboardSataController
     *
     * @return Motherboard
     */
    public function setMotherboardSataController($motherboardSataController)
    {
        $this->motherboardSataController = $motherboardSataController;

        return $this;
    }

    /**
     * Get motherboardSataController.
     *
     * @return string
     */
    public function getMotherboardSataController()
    {
        return $this->motherboardSataController;
    }
}
