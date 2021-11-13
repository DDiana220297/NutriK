<?php

namespace NutritionistBundle\Entity;

/**
 * WeeklyPlanTag
 */
class WeeklyPlanTag
{
    /**
     * @var integer
     */
    private $idWeekplyPlanTag;

    /**
     * @var integer
     */
    private $idWeeklyPlan;

    /**
     * @var integer
     */
    private $idTag;


    /**
     * Get idWeekplyPlanTag
     *
     * @return integer
     */
    public function getIdWeekplyPlanTag()
    {
        return $this->idWeekplyPlanTag;
    }

    /**
     * Set idWeeklyPlan
     *
     * @param integer $idWeeklyPlan
     *
     * @return WeeklyPlanTag
     */
    public function setIdWeeklyPlan($idWeeklyPlan)
    {
        $this->idWeeklyPlan = $idWeeklyPlan;

        return $this;
    }

    /**
     * Get idWeeklyPlan
     *
     * @return integer
     */
    public function getIdWeeklyPlan()
    {
        return $this->idWeeklyPlan;
    }

    /**
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return WeeklyPlanTag
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
