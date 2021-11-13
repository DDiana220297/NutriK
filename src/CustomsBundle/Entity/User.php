<?php

namespace CustomsBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $idUser;

    /**
     * @var integer
     */
    private $idGender;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $lastPasswordGen;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var boolean
     */
    private $sms = '1';

    /**
     * @var boolean
     */
    private $active = '1';

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var string
     */
    private $role = 'ROLE_GUEST';

    /**
     * @var string
     */
    private $studies;

    /**
     * @var integer
     */
    private $antiquity = 0;

    /**
     * @var string
     */
    private $collegiateNumber;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @var string
     */
    private $rate;


    /**
     * @var string
     */
    private $socialMedia;

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idGender
     *
     * @param integer $idGender
     *
     * @return User
     */
    public function setIdGender($idGender)
    {
        $this->idGender = $idGender;

        return $this;
    }

    /**
     * Get idGender
     *
     * @return integer
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastPasswordGen
     *
     * @param \DateTime $lastPasswordGen
     *
     * @return User
     */
    public function setLastPasswordGen($lastPasswordGen)
    {
        $this->lastPasswordGen = $lastPasswordGen;

        return $this;
    }

    /**
     * Get lastPasswordGen
     *
     * @return \DateTime
     */
    public function getLastPasswordGen()
    {
        return $this->lastPasswordGen;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set sms
     *
     * @param boolean $sms
     *
     * @return User
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get sms
     *
     * @return boolean
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return User
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return User
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
     * @return User
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

    /**
     * Set role
     *
     * @param $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole(){
        return $this->role;
    }

    /**
     * Get Studies
     *
     * @return string
     */
    public function getStudies(){
        return $this->studies;
    }

    /**
     * Set studies
     *
     * @param $studies
     * @return $this
     */
    public function setStudies($studies){
        $this->studies = $studies;

        return $this;
    }

    /**
     * Get Description
     *
     * @return string
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Set studies
     *
     * @param $description
     * @return $this
     */
    public function setDescription($description){
        $this->description = $description;

        return $this;
    }

    /**
     * Get Collegiate Number
     *
     * @return string
     */
    public function getCollegiate_Number(){
        return $this->collegiateNumber;
    }

    /**
     * Set Collegiate Number
     *
     * @param $collegiate_number
     * @return $this
     */
    public function setCollegiate_Number($collegiate_number){
        $this->collegiate_number = $collegiate_number;

        return $this;
    }

    /*
     * AUTH
     */

    public function getRoles()
    {
        return array($this->getRole());
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /*
     * END AUTH
     */

    /**
     * Set collegiateNumber
     *
     * @param string $collegiateNumber
     *
     * @return User
     */
    public function setCollegiateNumber($collegiateNumber)
    {
        $this->collegiateNumber = $collegiateNumber;

        return $this;
    }

    /**
     * Get collegiateNumber
     *
     * @return string
     */
    public function getCollegiateNumber()
    {
        return $this->collegiateNumber;
    }

    /**
     * @return int
     */
    public function getAntiquity(): int
    {
        return $this->antiquity;
    }

    /**
     * @param int $antiquity
     */
    public function setAntiquity(int $antiquity): void
    {
        $this->antiquity = $antiquity;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getSocialMedia()
    {
        return $this->socialMedia;
    }

    /**
     * @param string $socialMedia
     */
    public function setSocialMedia(string $socialMedia): void
    {
        $this->socialMedia = $socialMedia;
    }

    /**
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * @param string $presentation
     */
    public function setPresentation(string $presentation): void
    {
        $this->presentation = $presentation;
    }

    /**
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate(string $rate): void
    {
        $this->rate = $rate;
    }
}
