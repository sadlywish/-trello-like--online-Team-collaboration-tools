<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memory
 */
class Memory
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
    private $load;

    /**
     * @var integer
     */
    private $memUsed;

    /**
     * @var integer
     */
    private $memShare;

    /**
     * @var integer
     */
    private $memCached;

    /**
     * @var integer
     */
    private $memBuffer;

    /**
     * @var integer
     */
    private $memFree;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nodeid
     *
     * @param string $nodeid
     * @return Memory
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
     * @return Memory
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
     * Set load
     *
     * @param integer $load
     * @return Memory
     */
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }

    /**
     * Get load
     *
     * @return integer 
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set memUsed
     *
     * @param integer $memUsed
     * @return Memory
     */
    public function setMemUsed($memUsed)
    {
        $this->memUsed = $memUsed;

        return $this;
    }

    /**
     * Get memUsed
     *
     * @return integer 
     */
    public function getMemUsed()
    {
        return $this->memUsed;
    }

    /**
     * Set memShare
     *
     * @param integer $memShare
     * @return Memory
     */
    public function setMemShare($memShare)
    {
        $this->memShare = $memShare;

        return $this;
    }

    /**
     * Get memShare
     *
     * @return integer 
     */
    public function getMemShare()
    {
        return $this->memShare;
    }

    /**
     * Set memCached
     *
     * @param integer $memCached
     * @return Memory
     */
    public function setMemCached($memCached)
    {
        $this->memCached = $memCached;

        return $this;
    }

    /**
     * Get memCached
     *
     * @return integer 
     */
    public function getMemCached()
    {
        return $this->memCached;
    }

    /**
     * Set memBuffer
     *
     * @param integer $memBuffer
     * @return Memory
     */
    public function setMemBuffer($memBuffer)
    {
        $this->memBuffer = $memBuffer;

        return $this;
    }

    /**
     * Get memBuffer
     *
     * @return integer 
     */
    public function getMemBuffer()
    {
        return $this->memBuffer;
    }

    /**
     * Set memFree
     *
     * @param integer $memFree
     * @return Memory
     */
    public function setMemFree($memFree)
    {
        $this->memFree = $memFree;

        return $this;
    }

    /**
     * Get memFree
     *
     * @return integer 
     */
    public function getMemFree()
    {
        return $this->memFree;
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
