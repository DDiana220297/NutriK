<?php

namespace CustomsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Entry
 */
class Entry
{
    /**
     * @var integer
     */
    private $idEntry;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $content;

    /**
     * @var boolean
     */
    private $active = '1';

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var \CustomsBundle\Entity\Category
     */
    private $idCategory;

    /**
     * @var \CustomsBundle\Entity\User
     */
    private $idUser;

    /**
     * @var
     */
    protected $entryTags;

    /**
     * Override del constructor
     */
    public function __construct(){
        $this->entryTags = new ArrayCollection();
    }

    /**
     * Get entryTags
     *
     * @return ArrayCollection
     */
    public function getEntryTags()
    {
        return $this->entryTags;
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
     * Set title
     *
     * @param string $title
     *
     * @return Entry
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Entry
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Entry
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Entry
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Entry
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

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Entry
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set idCategory
     *
     * @param \CustomsBundle\Entity\Category $idCategory
     *
     * @return Entry
     */
    public function setIdCategory(\CustomsBundle\Entity\Category $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \CustomsBundle\Entity\Category
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idUser
     *
     * @param \CustomsBundle\Entity\User $idUser
     *
     * @return Entry
     */
    public function setIdUser(\CustomsBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CustomsBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set entryTags
     *
     * @param \CustomsBundle\Entity\Tag $tag
     *
     * @return Entry
     */
    public function addEntryTag(\CustomsBundle\Entity\Tag $tag){
        $this->entryTags[] = $tag;

        return $this;
    }



}

