<?php

namespace NutritionistBundle\Entity;

/**
 * Ingredients
 */
class Ingredients
{
    /**
     * @var integer
     */
    private $idIngredient;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $carbohydrates = '10';

    /**
     * @var float
     */
    private $fats = '5';

    /**
     * @var float
     */
    private $protein = '7';

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idIngredient
     *
     * @return integer
     */
    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ingredients
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set carbohydrates
     *
     * @param float $carbohydrates
     *
     * @return Ingredients
     */
    public function setCarbohydrates($carbohydrates)
    {
        $this->carbohydrates = $carbohydrates;

        return $this;
    }

    /**
     * Get carbohydrates
     *
     * @return float
     */
    public function getCarbohydrates()
    {
        return $this->carbohydrates;
    }

    /**
     * Set fats
     *
     * @param float $fats
     *
     * @return Ingredients
     */
    public function setFats($fats)
    {
        $this->fats = $fats;

        return $this;
    }

    /**
     * Get fats
     *
     * @return float
     */
    public function getFats()
    {
        return $this->fats;
    }

    /**
     * Set protein
     *
     * @param float $protein
     *
     * @return Ingredients
     */
    public function setProtein($protein)
    {
        $this->protein = $protein;

        return $this;
    }

    /**
     * Get protein
     *
     * @return float
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Ingredients
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
     * @return Ingredients
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
}

