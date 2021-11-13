<?php

namespace CustomsBundle\Entity;

/**
 * EntryTag
 */
class EntryTag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idEntry;

    /**
     * @var integer
     */
    private $idTag;


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
     * Set idEntry
     *
     * @param integer $idEntry
     *
     * @return EntryTag
     */
    public function setIdEntry($idEntry)
    {
        $this->idEntry = $idEntry;

        return $this;
    }

    /**
     * Get idEntry
     *
     * @return integer
     */
    public function getIdEntry()
    {
        return $this->idEntry;
    }

    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return EntryTag
     */
    public function setIdTag($idTag)
    {
        $this->idTag = $idTag;

        return $this;
    }

    /**
     * Get idTag
     *
     * @return integer
     */
    public function getIdTag()
    {
        return $this->idTag;
    }
}
