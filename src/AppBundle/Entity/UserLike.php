<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserLike
 *
 * @ApiResource
 * @ORM\Table(name="user_like")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserLikeRepository")
 */
class UserLike
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="userLikes")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Music", inversedBy="userLikes")
     * @ORM\JoinColumn(name="music_id", referencedColumnName="id")
     */
    private $music;


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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return UserLike
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set music
     *
     * @param \AppBundle\Entity\Music $music
     *
     * @return UserLike
     */
    public function setMusic(\AppBundle\Entity\Music $music = null)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return \AppBundle\Entity\Music
     */
    public function getMusic()
    {
        return $this->music;
    }
}
