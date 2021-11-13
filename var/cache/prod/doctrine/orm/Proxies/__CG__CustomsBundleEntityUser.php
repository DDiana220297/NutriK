<?php

namespace Proxies\__CG__\CustomsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \CustomsBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'idUser', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'idGender', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'age', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'lastPasswordGen', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'birthday', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'sms', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'active', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'deleted', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'dateAdd', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'dateUpd', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'role', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'studies', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'antiquity', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'collegiateNumber', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'description', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'image', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'presentation', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'rate', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'socialMedia'];
        }

        return ['__isInitialized__', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'idUser', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'idGender', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'age', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'lastPasswordGen', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'birthday', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'sms', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'active', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'deleted', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'dateAdd', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'dateUpd', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'role', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'studies', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'antiquity', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'collegiateNumber', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'description', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'image', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'presentation', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'rate', '' . "\0" . 'CustomsBundle\\Entity\\User' . "\0" . 'socialMedia'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdUser()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdUser();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdGender($idGender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGender', [$idGender]);

        return parent::setIdGender($idGender);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGender', []);

        return parent::getIdGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setAge($age)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAge', [$age]);

        return parent::setAge($age);
    }

    /**
     * {@inheritDoc}
     */
    public function getAge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', []);

        return parent::getAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPasswordGen($lastPasswordGen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPasswordGen', [$lastPasswordGen]);

        return parent::setLastPasswordGen($lastPasswordGen);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPasswordGen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPasswordGen', []);

        return parent::getLastPasswordGen();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setSms($sms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSms', [$sms]);

        return parent::setSms($sms);
    }

    /**
     * {@inheritDoc}
     */
    public function getSms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSms', []);

        return parent::getSms();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd($dateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', [$dateAdd]);

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', []);

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpd($dateUpd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpd', [$dateUpd]);

        return parent::setDateUpd($dateUpd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpd', []);

        return parent::getDateUpd();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function getStudies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStudies', []);

        return parent::getStudies();
    }

    /**
     * {@inheritDoc}
     */
    public function setStudies($studies)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStudies', [$studies]);

        return parent::setStudies($studies);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollegiate_Number()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollegiate_Number', []);

        return parent::getCollegiate_Number();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollegiate_Number($collegiate_number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollegiate_Number', [$collegiate_number]);

        return parent::setCollegiate_Number($collegiate_number);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollegiateNumber($collegiateNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollegiateNumber', [$collegiateNumber]);

        return parent::setCollegiateNumber($collegiateNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollegiateNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollegiateNumber', []);

        return parent::getCollegiateNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getAntiquity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntiquity', []);

        return parent::getAntiquity();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntiquity(int $antiquity): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntiquity', [$antiquity]);

        parent::setAntiquity($antiquity);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocialMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocialMedia', []);

        return parent::getSocialMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocialMedia(string $socialMedia): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocialMedia', [$socialMedia]);

        parent::setSocialMedia($socialMedia);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', []);

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation(string $presentation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', [$presentation]);

        parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRate', []);

        return parent::getRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRate(string $rate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRate', [$rate]);

        parent::setRate($rate);
    }

}
