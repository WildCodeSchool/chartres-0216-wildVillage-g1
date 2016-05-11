<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @var int
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
     */     
    private $idFosUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=25, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=25, nullable=true)
     */
    private $prenom;

    /**
     * @var date
     *
     * @ORM\Column(name="Date_de_naissance", type="date" , nullable=false)
     */
    private $date_de_naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="Linkedin", type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="Doyoubuzz", type="string", length=255, nullable=true)
     */
    private $doyoubuzz;

    /**
     * @var string
     *
     * @ORM\Column(name="Github", type="string", length=255, nullable=true)
     */
    private $github;

    /**
     * @var string
     *
     * @ORM\Column(name="Biographie", type="text", nullable=true)
     */
    private $biographie;

    /**
     * @var bool
     *
     * @ORM\Column(name="Visible", type="boolean", nullable=true)   
     */
    private $visible;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param date $date_de_naissance
     *
     * @return Utilisateur
     */
    public function setDate_de_naissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    /**
     * Get date_de_naissance
     *
     * @return date
     */
    public function getDate_de_naissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Utilisateur
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Utilisateur
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set doyoubuzz
     *
     * @param string $doyoubuzz
     *
     * @return Utilisateur
     */
    public function setDoyoubuzz($doyoubuzz)
    {
        $this->doyoubuzz = $doyoubuzz;

        return $this;
    }

    /**
     * Get doyoubuzz
     *
     * @return string
     */
    public function getDoyoubuzz()
    {
        return $this->doyoubuzz;
    }

    /**
     * Set github
     *
     * @param string $github
     *
     * @return Utilisateur
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set biographie
     *
     * @param string $biographie
     *
     * @return Utilisateur
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;

        return $this;
    }

    /**
     * Get biographie
     *
     * @return string
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Utilisateur
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set idFosUser
     *
     * @param \UserBundle\Entity\User $idFosUser
     *
     * @return Utilisateur
     */
    public function setIdFosUser(\UserBundle\Entity\User $idFosUser = null)
    {
        $this->idFosUser = $idFosUser;

        return $this;
    }

    /**
     * Get idFosUser
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdFosUser()
    {
        return $this->idFosUser;
    }
}
