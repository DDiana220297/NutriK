<?php

namespace NutritionistBundle\Entity;

/**
 * Appointment
 */
class Appointment
{
    /**
     * @var integer
     */
    private $idAppointment;

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
    private $date;

    /**
     * @var integer
     */
    private $duration = '60';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $appointmentType = 'presencial';

    /**
     * @var string
     */
    private $appointmentLink;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;


    /**
     * Get idAppointment
     *
     * @return integer
     */
    public function getIdAppointment()
    {
        return $this->idAppointment;
    }

    /**
     * Set idNutritionist
     *
     * @param integer $idNutritionist
     *
     * @return Appointment
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
     * @return Appointment
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Appointment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Appointment
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Appointment
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
     * Set appointmentType
     *
     * @param string $appointmentType
     *
     * @return Appointment
     */
    public function setAppointmentType($appointmentType)
    {
        $this->appointmentType = $appointmentType;

        return $this;
    }

    /**
     * Get appointmentType
     *
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * Set appointmentLink
     *
     * @param string $appointmentLink
     *
     * @return Appointment
     */
    public function setAppointmentLink($appointmentLink)
    {
        $this->appointmentLink = $appointmentLink;

        return $this;
    }

    /**
     * Get appointmentLink
     *
     * @return string
     */
    public function getAppointmentLink()
    {
        return $this->appointmentLink;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Appointment
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
     * @return Appointment
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

