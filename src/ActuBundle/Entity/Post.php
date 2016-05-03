<?php

namespace ActuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="ActuBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="Auteur", type="string", length=25, nullable=true)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_publication", type="datetime")
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="Billet", type="text", nullable=true)
     */
    private $billet;


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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Post
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Post
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set billet
     *
     * @param string $billet
     *
     * @return Post
     */
    public function setBillet($billet)
    {
        $this->billet = $billet;

        return $this;
    }

    /**
     * Get billet
     *
     * @return string
     */
    public function getBillet()
    {
        return $this->billet;
    }
}

