<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ApiResource
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 */
class Artist
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Music", mappedBy="interpreter")
     */
    private $interpretedMusics;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Music", mappedBy="composer")
     */
    private $composedMusics;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Artist
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
     * @return Artist
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
     * Constructor
     */
    public function __construct()
    {
        $this->interpretedMusics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->composedMusics = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add interpretedMusic
     *
     * @param \AppBundle\Entity\Music $interpretedMusic
     *
     * @return Artist
     */
    public function addInterpretedMusic(\AppBundle\Entity\Music $interpretedMusic)
    {
        $this->interpretedMusics[] = $interpretedMusic;

        return $this;
    }

    /**
     * Remove interpretedMusic
     *
     * @param \AppBundle\Entity\Music $interpretedMusic
     */
    public function removeInterpretedMusic(\AppBundle\Entity\Music $interpretedMusic)
    {
        $this->interpretedMusics->removeElement($interpretedMusic);
    }

    /**
     * Get interpretedMusics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterpretedMusics()
    {
        return $this->interpretedMusics;
    }

    /**
     * Add composedMusic
     *
     * @param \AppBundle\Entity\Music $composedMusic
     *
     * @return Artist
     */
    public function addComposedMusic(\AppBundle\Entity\Music $composedMusic)
    {
        $this->composedMusics[] = $composedMusic;

        return $this;
    }

    /**
     * Remove composedMusic
     *
     * @param \AppBundle\Entity\Music $composedMusic
     */
    public function removeComposedMusic(\AppBundle\Entity\Music $composedMusic)
    {
        $this->composedMusics->removeElement($composedMusic);
    }

    /**
     * Get composedMusics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComposedMusics()
    {
        return $this->composedMusics;
    }
}
