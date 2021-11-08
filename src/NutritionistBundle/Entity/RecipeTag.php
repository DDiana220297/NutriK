<?php

namespace NutritionistBundle\Entity;

/**
 * RecipeTag
 */
class RecipeTag
{
    /**
     * @var integer
     */
    private $idRecipeTag;

    /**
     * @var integer
     */
    private $idRecipe;

    /**
     * @var integer
     */
    private $idTag;


    /**
     * Get idRecipeTag
     *
     * @return integer
     */
    public function getIdRecipeTag()
    {
        return $this->idRecipeTag;
    }

    /**
     * Set idRecipe
     *
     * @param integer $idRecipe
     *
     * @return RecipeTag
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
     * Set idTag
     *
     * @param integer $idTag
     *
     * @return RecipeTag
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
