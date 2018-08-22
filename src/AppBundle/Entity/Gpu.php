<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gpu
 *
 * @ORM\Table(name="gpu")
 * @ORM\Entity
 */
class Gpu
{
    /**
     * @var int
     *
     * @ORM\Column(name="gpu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gpuId;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_model", type="string", length=255, nullable=false)
     */
    private $gpuModel;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_frequency", type="string", length=255, nullable=false)
     */
    private $gpuFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_interface", type="string", length=255, nullable=false)
     */
    private $gpuInterface;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_memory", type="string", length=255, nullable=false)
     */
    private $gpuMemory;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_memory_frequency", type="string", length=255, nullable=false)
     */
    private $gpuMemoryFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="gpu_details", type="string", length=255, nullable=false)
     */
    private $gpuDetails;



    /**
     * Get gpuId.
     *
     * @return int
     */
    public function getGpuId()
    {
        return $this->gpuId;
    }

    /**
     * Set gpuModel.
     *
     * @param string $gpuModel
     *
     * @return Gpu
     */
    public function setGpuModel($gpuModel)
    {
        $this->gpuModel = $gpuModel;

        return $this;
    }

    /**
     * Get gpuModel.
     *
     * @return string
     */
    public function getGpuModel()
    {
        return $this->gpuModel;
    }

    /**
     * Set gpuFrequency.
     *
     * @param string $gpuFrequency
     *
     * @return Gpu
     */
    public function setGpuFrequency($gpuFrequency)
    {
        $this->gpuFrequency = $gpuFrequency;

        return $this;
    }

    /**
     * Get gpuFrequency.
     *
     * @return string
     */
    public function getGpuFrequency()
    {
        return $this->gpuFrequency;
    }

    /**
     * Set gpuInterface.
     *
     * @param string $gpuInterface
     *
     * @return Gpu
     */
    public function setGpuInterface($gpuInterface)
    {
        $this->gpuInterface = $gpuInterface;

        return $this;
    }

    /**
     * Get gpuInterface.
     *
     * @return string
     */
    public function getGpuInterface()
    {
        return $this->gpuInterface;
    }

    /**
     * Set gpuMemory.
     *
     * @param string $gpuMemory
     *
     * @return Gpu
     */
    public function setGpuMemory($gpuMemory)
    {
        $this->gpuMemory = $gpuMemory;

        return $this;
    }

    /**
     * Get gpuMemory.
     *
     * @return string
     */
    public function getGpuMemory()
    {
        return $this->gpuMemory;
    }

    /**
     * Set gpuMemoryFrequency.
     *
     * @param string $gpuMemoryFrequency
     *
     * @return Gpu
     */
    public function setGpuMemoryFrequency($gpuMemoryFrequency)
    {
        $this->gpuMemoryFrequency = $gpuMemoryFrequency;

        return $this;
    }

    /**
     * Get gpuMemoryFrequency.
     *
     * @return string
     */
    public function getGpuMemoryFrequency()
    {
        return $this->gpuMemoryFrequency;
    }

    /**
     * Set gpuDetails.
     *
     * @param string $gpuDetails
     *
     * @return Gpu
     */
    public function setGpuDetails($gpuDetails)
    {
        $this->gpuDetails = $gpuDetails;

        return $this;
    }

    /**
     * Get gpuDetails.
     *
     * @return string
     */
    public function getGpuDetails()
    {
        return $this->gpuDetails;
    }
}
