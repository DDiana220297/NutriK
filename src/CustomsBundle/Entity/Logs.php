<?php

namespace CustomsBundle\Entity;

/**
 * Logs
 */
class Logs
{
    /**
     * @var integer
     */
    private $idLog;

    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $context;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idLog
     *
     * @return integer
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Logs
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Logs
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set context
     *
     * @param string $context
     *
     * @return Logs
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Logs
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }
}

