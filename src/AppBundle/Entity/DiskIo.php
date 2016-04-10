<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiskIo
 */
class DiskIo
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
    private $dev;

    /**
     * @var integer
     */
    private $read;

    /**
     * @var integer
     */
    private $write;

    /**
     * @var integer
     */
    private $readByte;

    /**
     * @var integer
     */
    private $writeByte;

    /**
     * @var float
     */
    private $util;

    /**
     * @var float
     */
    private $await;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nodeid
     *
     * @param string $nodeid
     * @return DiskIo
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
     * @return DiskIo
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
     * Set dev
     *
     * @param string $dev
     * @return DiskIo
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
     * Set read
     *
     * @param integer $read
     * @return DiskIo
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * Get read
     *
     * @return integer 
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Set write
     *
     * @param integer $write
     * @return DiskIo
     */
    public function setWrite($write)
    {
        $this->write = $write;

        return $this;
    }

    /**
     * Get write
     *
     * @return integer 
     */
    public function getWrite()
    {
        return $this->write;
    }

    /**
     * Set readByte
     *
     * @param integer $readByte
     * @return DiskIo
     */
    public function setReadByte($readByte)
    {
        $this->readByte = $readByte;

        return $this;
    }

    /**
     * Get readByte
     *
     * @return integer 
     */
    public function getReadByte()
    {
        return $this->readByte;
    }

    /**
     * Set writeByte
     *
     * @param integer $writeByte
     * @return DiskIo
     */
    public function setWriteByte($writeByte)
    {
        $this->writeByte = $writeByte;

        return $this;
    }

    /**
     * Get writeByte
     *
     * @return integer 
     */
    public function getWriteByte()
    {
        return $this->writeByte;
    }

    /**
     * Set util
     *
     * @param float $util
     * @return DiskIo
     */
    public function setUtil($util)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return float 
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Set await
     *
     * @param float $await
     * @return DiskIo
     */
    public function setAwait($await)
    {
        $this->await = $await;

        return $this;
    }

    /**
     * Get await
     *
     * @return float 
     */
    public function getAwait()
    {
        return $this->await;
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
