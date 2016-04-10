<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NodeState
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\NodeStateRepository")
 */
class NodeState
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nodeid", type="string", length=255)
     */
    private $nodeid;

    /**
     * @var float
     *
     * @ORM\Column(name="cpu_used", type="float")
     */
    private $cpuUsed;

    /**
     * @var float
     *
     * @ORM\Column(name="mem_used", type="float")
     */
    private $memUsed;

    /**
     * @var float
     *
     * @ORM\Column(name="mem_total", type="float")
     */
    private $memTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="disk_used", type="float")
     */
    private $diskUsed;

    /**
     * @var float
     *
     * @ORM\Column(name="disk_total", type="float")
     */
    private $diskTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctime", type="datetime")
     */
    private $ctime;

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
     * Set nodeid
     *
     * @param string $nodeid
     * @return NodeState
     */
    public function setNodeid($nodeid)
    {
        $this->nodeid = $nodeid;

        return $this;
    }

    /**
     * Get nodeid
     *
     * @return string 
     */
    public function getNodeid()
    {
        return $this->nodeid;
    }

    /**
     * Set cpuUsed
     *
     * @param float $cpuUsed
     * @return NodeState
     */
    public function setCpuUsed($cpuUsed)
    {
        $this->cpuUsed = $cpuUsed;

        return $this;
    }

    /**
     * Get cpuUsed
     *
     * @return float 
     */
    public function getCpuUsed()
    {
        return $this->cpuUsed;
    }

    /**
     * Set memUsed
     *
     * @param float $memUsed
     * @return NodeState
     */
    public function setMemUsed($memUsed)
    {
        $this->memUsed = $memUsed;

        return $this;
    }

    /**
     * Get memUsed
     *
     * @return float 
     */
    public function getMemUsed()
    {
        return $this->memUsed;
    }

    /**
     * Set memTotal
     *
     * @param float $memTotal
     * @return NodeState
     */
    public function setMemTotal($memTotal)
    {
        $this->memTotal = $memTotal;

        return $this;
    }

    /**
     * Get memTotal
     *
     * @return float 
     */
    public function getMemTotal()
    {
        return $this->memTotal;
    }

    /**
     * Set diskUsed
     *
     * @param float $diskUsed
     * @return NodeState
     */
    public function setDiskUsed($diskUsed)
    {
        $this->diskUsed = $diskUsed;

        return $this;
    }

    /**
     * Get diskUsed
     *
     * @return float 
     */
    public function getDiskUsed()
    {
        return $this->diskUsed;
    }

    /**
     * Set diskTotal
     *
     * @param float $diskTotal
     * @return NodeState
     */
    public function setDiskTotal($diskTotal)
    {
        $this->diskTotal = $diskTotal;

        return $this;
    }

    /**
     * Get diskTotal
     *
     * @return float 
     */
    public function getDiskTotal()
    {
        return $this->diskTotal;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return NodeState
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return mixed
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * @param mixed $ctime
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;
    }


}
