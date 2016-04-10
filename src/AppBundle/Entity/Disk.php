<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disk
 */
class Disk
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
     * @var string
     */
    private $mountPoint;

    /**
     * @var integer
     */
    private $used;

    /**
     * @var integer
     */
    private $iused;

    /**
     * @var string
     */
    private $dev;

    /**
     * @var integer
     */
    private $avail;

    /**
     * @var integer
     */
    private $total;

    /**
     * @var integer
     */
    private $ifree;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nodeid
     *
     * @param string $nodeid
     * @return Disk
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
     * @return Disk
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
     * Set mountPoint
     *
     * @param string $mountPoint
     * @return Disk
     */
    public function setMountPoint($mountPoint)
    {
        $this->mountPoint = $mountPoint;

        return $this;
    }

    /**
     * Get mountPoint
     *
     * @return string 
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }

    /**
     * Set used
     *
     * @param integer $used
     * @return Disk
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return integer 
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Set iused
     *
     * @param integer $iused
     * @return Disk
     */
    public function setIused($iused)
    {
        $this->iused = $iused;

        return $this;
    }

    /**
     * Get iused
     *
     * @return integer 
     */
    public function getIused()
    {
        return $this->iused;
    }

    /**
     * Set dev
     *
     * @param string $dev
     * @return Disk
     */
    public function setDev($dev)
    {
        $this->dev = $dev;

        return $this;
    }

    /**
     * Get dev
     *
     * @return string 
     */
    public function getDev()
    {
        return $this->dev;
    }

    /**
     * Set avail
     *
     * @param integer $avail
     * @return Disk
     */
    public function setAvail($avail)
    {
        $this->avail = $avail;

        return $this;
    }

    /**
     * Get avail
     *
     * @return integer 
     */
    public function getAvail()
    {
        return $this->avail;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Disk
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set ifree
     *
     * @param integer $ifree
     * @return Disk
     */
    public function setIfree($ifree)
    {
        $this->ifree = $ifree;

        return $this;
    }

    /**
     * Get ifree
     *
     * @return integer 
     */
    public function getIfree()
    {
        return $this->ifree;
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
