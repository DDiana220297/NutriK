<?php

namespace NutritionistBundle\Entity;

/**
 * IngredientsRecipes
 */
class IngredientsRecipes
{
    /**
     * @var integer
     */
    private $idIngredientRecipe;

    /**
     * @var integer
     */
    private $idIngredient;

    /**
     * @var integer
     */
    private $idRecipe;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idIngredientRecipe
     *
     * @return integer
     */
    public function getIdIngredientRecipe()
    {
        return $this->idIngredientRecipe;
    }

    /**
     * Set idIngredient
     *
     * @param integer $idIngredient
     *
     * @return IngredientsRecipes
     */
    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;

        return $this;
    }

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
     * Set idRecipe
     *
     * @param integer $idRecipe
     *
     * @return IngredientsRecipes
     */
    public function setIdRecipe($idRecipe)
    {
        $this->idRecipe = $idRecipe;

        return $this;
    }

    /**
     * Get idRecipe
     *
     * @return integer
     */
    public function getIdRecipe()
    {
        return $this->idRecipe;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return IngredientsRecipes
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

