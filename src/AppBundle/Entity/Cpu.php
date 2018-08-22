<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpu
 *
 * @ORM\Table(name="cpu")
 * @ORM\Entity
 */
class Cpu
{
    /**
     * @var int
     *
     * @ORM\Column(name="cpu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpuId;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_core_number", type="string", length=255, nullable=false)
     */
    private $cpuCoreNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_frequency", type="string", length=255, nullable=false)
     */
    private $cpuFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_cache", type="string", length=255, nullable=false)
     */
    private $cpuCache;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_architecture", type="string", length=255, nullable=false)
     */
    private $cpuArchitecture;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_socket", type="string", length=255, nullable=false)
     */
    private $cpuSocket;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu_thermal_dissipation", type="string", length=255, nullable=false)
     */
    private $cpuThermalDissipation;



    /**
     * Get cpuId.
     *
     * @return int
     */
    public function getCpuId()
    {
        return $this->cpuId;
    }

    /**
     * Set cpuCoreNumber.
     *
     * @param string $cpuCoreNumber
     *
     * @return Cpu
     */
    public function setCpuCoreNumber($cpuCoreNumber)
    {
        $this->cpuCoreNumber = $cpuCoreNumber;

        return $this;
    }

    /**
     * Get cpuCoreNumber.
     *
     * @return string
     */
    public function getCpuCoreNumber()
    {
        return $this->cpuCoreNumber;
    }

    /**
     * Set cpuFrequency.
     *
     * @param string $cpuFrequency
     *
     * @return Cpu
     */
    public function setCpuFrequency($cpuFrequency)
    {
        $this->cpuFrequency = $cpuFrequency;

        return $this;
    }

    /**
     * Get cpuFrequency.
     *
     * @return string
     */
    public function getCpuFrequency()
    {
        return $this->cpuFrequency;
    }

    /**
     * Set cpuCache.
     *
     * @param string $cpuCache
     *
     * @return Cpu
     */
    public function setCpuCache($cpuCache)
    {
        $this->cpuCache = $cpuCache;

        return $this;
    }

    /**
     * Get cpuCache.
     *
     * @return string
     */
    public function getCpuCache()
    {
        return $this->cpuCache;
    }

    /**
     * Set cpuArchitecture.
     *
     * @param string $cpuArchitecture
     *
     * @return Cpu
     */
    public function setCpuArchitecture($cpuArchitecture)
    {
        $this->cpuArchitecture = $cpuArchitecture;

        return $this;
    }

    /**
     * Get cpuArchitecture.
     *
     * @return string
     */
    public function getCpuArchitecture()
    {
        return $this->cpuArchitecture;
    }

    /**
     * Set cpuSocket.
     *
     * @param string $cpuSocket
     *
     * @return Cpu
     */
    public function setCpuSocket($cpuSocket)
    {
        $this->cpuSocket = $cpuSocket;

        return $this;
    }

    /**
     * Get cpuSocket.
     *
     * @return string
     */
    public function getCpuSocket()
    {
        return $this->cpuSocket;
    }

    /**
     * Set cpuThermalDissipation.
     *
     * @param string $cpuThermalDissipation
     *
     * @return Cpu
     */
    public function setCpuThermalDissipation($cpuThermalDissipation)
    {
        $this->cpuThermalDissipation = $cpuThermalDissipation;

        return $this;
    }

    /**
     * Get cpuThermalDissipation.
     *
     * @return string
     */
    public function getCpuThermalDissipation()
    {
        return $this->cpuThermalDissipation;
    }
}
