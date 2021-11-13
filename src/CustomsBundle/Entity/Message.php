<?php

namespace CustomsBundle\Entity;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $idMessage;

    /**
     * @var integer
     */
    private $idUserFrom;

    /**
     * @var integer
     */
    private $idUserTo;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $content;

    /**
     * @var boolean
     */
    private $messageRead = '0';

    /**
     * @var \DateTime
     */
    private $dateRead;

    /**
     * @var \DateTime
     */
    private $dateAdd;


    /**
     * Get idMessage
     *
     * @return integer
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set idUserFrom
     *
     * @param integer $idUserFrom
     *
     * @return Message
     */
    public function setIdUserFrom($idUserFrom)
    {
        $this->idUserFrom = $idUserFrom;

        return $this;
    }

    /**
     * Get idUserFrom
     *
     * @return integer
     */
    public function getIdUserFrom()
    {
        return $this->idUserFrom;
    }

    /**
     * Set idUserTo
     *
     * @param integer $idUserTo
     *
     * @return Message
     */
    public function setIdUserTo($idUserTo)
    {
        $this->idUserTo = $idUserTo;

        return $this;
    }

    /**
     * Get idUserTo
     *
     * @return integer
     */
    public function getIdUserTo()
    {
        return $this->idUserTo;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateRead
     *
     * @param \DateTime $dateRead
     *
     * @return Message
     */
    public function setDateRead($dateRead)
    {
        $this->dateRead = $dateRead;

        return $this;
    }

    /**
     * Get dateRead
     *
     * @return \DateTime
     */
    public function getDateRead()
    {
        return $this->dateRead;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Message
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
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return bool
     */
    public function isMessageRead(): bool
    {
        return $this->messageRead;
    }

    /**
     * @param bool $messageRead
     */
    public function setMessageRead(bool $messageRead): void
    {
        $this->messageRead = $messageRead;
    }
}

