<?php

namespace NutritionistBundle\Entity;

/**
 * CustomerPlans
 */
class CustomerPlans
{
    /**
     * @var integer
     */
    private $idCustomerPlan;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idPlan;

    /**
     * @var string
     */
    private $planNotes;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime
     */
    private $dateTo;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idCustomerPlan
     *
     * @return integer
     */
    public function getIdCustomerPlan()
    {
        return $this->idCustomerPlan;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return CustomerPlans
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
     * Set idPlan
     *
     * @param integer $idPlan
     *
     * @return CustomerPlans
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
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     *
     * @return CustomerPlans
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     *
     * @return CustomerPlans
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return CustomerPlans
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
     * @return string
     */
    public function getPlanNotes(): string
    {
        return $this->planNotes;
    }

    /**
     * @param string $planNotes
     */
    public function setPlanNotes(string $planNotes): void
    {
        $this->planNotes = $planNotes;
    }
}

