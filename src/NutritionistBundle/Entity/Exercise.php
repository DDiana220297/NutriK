<?php

namespace NutritionistBundle\Entity;

/**
 * Exercise
 */
class Exercise
{
    /**
     * @var integer
     */
    private $idExercise;

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
    private $muscles;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idExercise
     *
     * @return integer
     */
    public function getIdExercise()
    {
        return $this->idExercise;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Exercise
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
     * @return Exercise
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
     * Set muscles
     *
     * @param string $muscles
     *
     * @return Exercise
     */
    public function setMuscles($muscles)
    {
        $this->muscles = $muscles;

        return $this;
    }

    /**
     * Get muscles
     *
     * @return string
     */
    public function getMuscles()
    {
        return $this->muscles;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Exercise
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

