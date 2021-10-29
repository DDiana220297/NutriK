<?php

namespace NutritionistBundle\Entity;

/**
 * CustomerNutritionist
 */
class CustomerNutritionist
{
    /**
     * @var integer
     */
    private $idCustomerNutritionist;

    /**
     * @var integer
     */
    private $idNutritionist;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idCustomerNutritionist
     *
     * @return integer
     */
    public function getIdCustomerNutritionist()
    {
        return $this->idCustomerNutritionist;
    }

    /**
     * Set idNutritionist
     *
     * @param integer $idNutritionist
     *
     * @return CustomerNutritionist
     */
    public function setIdNutritionist($idNutritionist)
    {
        $this->idNutritionist = $idNutritionist;

        return $this;
    }

    /**
     * Get idNutritionist
     *
     * @return integer
     */
    public function getIdNutritionist()
    {
        return $this->idNutritionist;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return CustomerNutritionist
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return CustomerNutritionist
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
