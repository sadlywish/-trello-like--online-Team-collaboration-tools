<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpuavg
 */
class Cpuavg
{
    /**
     * @var string
     */
    private $nodeid;

    /**
     * @var \DateTime
     */
    private $ctime;

    /**
     * @var float
     */
    private $user;

    /**
     * @var float
     */
    private $sys;

    /**
     * @var float
     */
    private $idle;

    /**
     * @var float
     */
    private $iowait;

    /**
     * @var float
     */
    private $soft;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nodeid
     *
     * @param string $nodeid
     * @return Cpuavg
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
     * Set ctime
     *
     * @param \DateTime $ctime
     * @return Cpuavg
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return \DateTime 
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set user
     *
     * @param float $user
     * @return Cpuavg
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return float 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set sys
     *
     * @param float $sys
     * @return Cpuavg
     */
    public function setSys($sys)
    {
        $this->sys = $sys;

        return $this;
    }

    /**
     * Get sys
     *
     * @return float 
     */
    public function getSys()
    {
        return $this->sys;
    }

    /**
     * Set idle
     *
     * @param float $idle
     * @return Cpuavg
     */
    public function setIdle($idle)
    {
        $this->idle = $idle;

        return $this;
    }

    /**
     * Get idle
     *
     * @return float 
     */
    public function getIdle()
    {
        return $this->idle;
    }

    /**
     * Set iowait
     *
     * @param float $iowait
     * @return Cpuavg
     */
    public function setIowait($iowait)
    {
        $this->iowait = $iowait;

        return $this;
    }

    /**
     * Get iowait
     *
     * @return float 
     */
    public function getIowait()
    {
        return $this->iowait;
    }

    /**
     * Set soft
     *
     * @param float $soft
     * @return Cpuavg
     */
    public function setSoft($soft)
    {
        $this->soft = $soft;

        return $this;
    }

    /**
     * Get soft
     *
     * @return float 
     */
    public function getSoft()
    {
        return $this->soft;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
