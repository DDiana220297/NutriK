<?php

namespace NutritionistBundle\Entity;

/**
 * EventTag
 */
class EventTag
{
    /**
     * @var integer
     */
    private $idEventTag;

    /**
     * @var integer
     */
    private $idEvent;

    /**
     * @var integer
     */
    private $idTag;


    /**
     * Get idEventTag
     *
     * @return integer
     */
    public function getIdEventTag()
    {
        return $this->idEventTag;
    }

    /**
     * Set idEvent
     *
     * @param integer $idEvent
     *
     * @return EventTag
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * Get idEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return EventTag
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
