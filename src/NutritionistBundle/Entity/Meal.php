<?php

namespace NutritionistBundle\Entity;

/**
 * Meal
 */
class Meal
{
    /**
     * @var integer
     */
    private $idMeal;

    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var string
     */
    private $mealSort;

    /**
     * @var string
     */
    private $day;

    /**
     * @var \DateTime
     */
    private $hour;

    /**
     * @var string
     */
    private $meal;

    /**
     * @var string
     */
    private $mealShoppingList;

    /**
     * @var string
     */
    private $mealNotes;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idMeal
     *
     * @return integer
     */
    public function getIdMeal()
    {
        return $this->idMeal;
    }

    /**
     * Set idPlan
     *
     * @param integer $idPlan
     *
     * @return Meal
     */
    public function setIdPlan($idPlan)
    {
        $this->idPlan = $idPlan;

        return $this;
    }

    /**
     * Get idPlan
     *
     * @return integer
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * Set mealSort
     *
     * @param string $mealSort
     *
     * @return Meal
     */
    public function setMealSort($mealSort)
    {
        $this->mealSort = $mealSort;

        return $this;
    }

    /**
     * Get mealSort
     *
     * @return string
     */
    public function getMealSort()
    {
        return $this->mealSort;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Meal
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set hour
     *
     * @param \DateTime $hour
     *
     * @return Meal
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return \DateTime
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set meal
     *
     * @param string $meal
     *
     * @return Meal
     */
    public function setMeal($meal)
    {
        $this->meal = $meal;

        return $this;
    }

    /**
     * Get meal
     *
     * @return string
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Set mealShoppingList
     *
     * @param string $mealShoppingList
     *
     * @return Meal
     */
    public function setMealShoppingList($mealShoppingList)
    {
        $this->mealShoppingList = $mealShoppingList;

        return $this;
    }

    /**
     * Get mealShoppingList
     *
     * @return string
     */
    public function getMealShoppingList()
    {
        return $this->mealShoppingList;
    }

    /**
     * Set mealNotes
     *
     * @param string $mealNotes
     *
     * @return Meal
     */
    public function setMealNotes($mealNotes)
    {
        $this->mealNotes = $mealNotes;

        return $this;
    }

    /**
     * Get mealNotes
     *
     * @return string
     */
    public function getMealNotes()
    {
        return $this->mealNotes;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Meal
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

