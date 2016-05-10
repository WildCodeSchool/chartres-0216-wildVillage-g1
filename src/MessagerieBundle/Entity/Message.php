<?php

namespace MessagerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="MessagerieBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $expediteur;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="Sujet", type="string", length=255, nullable=true)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_envoi", type="datetime", nullable=true)
     */
    private $dateEnvoi;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set expéditeur
     *
     * @param string $expéditeur
     *
     * @return Message
     */
    public function setExpéditeur($expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expéditeur
     *
     * @return string
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return Message
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Message
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Message
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }
}
