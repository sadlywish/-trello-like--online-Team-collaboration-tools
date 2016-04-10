<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpuall
 */
class Cpuall
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
     * @var integer
     */
    private $coreid;

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
     * @return Cpuall
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
     * @return Cpuall
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
     * Set coreid
     *
     * @param integer $coreid
     * @return Cpuall
     */
    public function setCoreid($coreid)
    {
        $this->coreid = $coreid;

        return $this;
    }

    /**
     * Get coreid
     *
     * @return integer 
     */
    public function getCoreid()
    {
        return $this->coreid;
    }

    /**
     * Set user
     *
     * @param float $user
     * @return Cpuall
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
     * @return Cpuall
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
     * @return Cpuall
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
     * @return Cpuall
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
     * @return Cpuall
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
