<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Music
 *
 * @ApiResource
 * @ORM\Table(name="music")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MusicRepository")
 */
class Music
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Kind", inversedBy="musics")
     * @ORM\JoinColumn(name="kind_id", referencedColumnName="id")
     */
    private $kind;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artist", inversedBy="interpretedMusics")
     * @ORM\JoinColumn(name="interpreter_artist_id", referencedColumnName="id")
     */
    private $interpreter;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artist", inversedBy="composedMusics")
     * @ORM\JoinColumn(name="composer_artist_id", referencedColumnName="id")
     */
    private $composer;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="music")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PlayListMusic", mappedBy="music")
     */
    private $playListMusics;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="musics")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserLike", mappedBy="music")
     */
    private $userLikes;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="music_created_at", type="datetime")
     */
    private $musicCreatedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=false)
     */
    private $format;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_explicit", type="boolean")
     */
    private $isExplicit;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_downloadable", type="boolean")
     */
    private $isDownloadable;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_play", type="integer", nullable=true)
     */
    private $nbPlay;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_download", type="integer", nullable=true)
     */
    private $nbDownload;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_like", type="integer", nullable=true)
     */
    private $nbLike;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_comment", type="integer", nullable=true)
     */
    private $nbComment;


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
     * Set title
     *
     * @param string $title
     *
     * @return Music
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Music
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
     * Set image
     *
     * @param string $image
     *
     * @return Music
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set musicCreatedAt
     *
     * @param \DateTime $musicCreatedAt
     *
     * @return Music
     */
    public function setMusicCreatedAt($musicCreatedAt)
    {
        $this->musicCreatedAt = $musicCreatedAt;

        return $this;
    }

    /**
     * Get musicCreatedAt
     *
     * @return \DateTime
     */
    public function getMusicCreatedAt()
    {
        return $this->musicCreatedAt;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Music
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Music
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Music
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Music
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isExplicit
     *
     * @param boolean $isExplicit
     *
     * @return Music
     */
    public function setIsExplicit($isExplicit)
    {
        $this->isExplicit = $isExplicit;

        return $this;
    }

    /**
     * Get isExplicit
     *
     * @return bool
     */
    public function getIsExplicit()
    {
        return $this->isExplicit;
    }

    /**
     * Set isDownloadable
     *
     * @param boolean $isDownloadable
     *
     * @return Music
     */
    public function setIsDownloadable($isDownloadable)
    {
        $this->isDownloadable = $isDownloadable;

        return $this;
    }

    /**
     * Get isDownloadable
     *
     * @return bool
     */
    public function getIsDownloadable()
    {
        return $this->isDownloadable;
    }

    /**
     * Set nbPlay
     *
     * @param integer $nbPlay
     *
     * @return Music
     */
    public function setNbPlay($nbPlay)
    {
        $this->nbPlay = $nbPlay;

        return $this;
    }

    /**
     * Get nbPlay
     *
     * @return int
     */
    public function getNbPlay()
    {
        return $this->nbPlay;
    }

    /**
     * Set nbDownload
     *
     * @param integer $nbDownload
     *
     * @return Music
     */
    public function setNbDownload($nbDownload)
    {
        $this->nbDownload = $nbDownload;

        return $this;
    }

    /**
     * Get nbDownload
     *
     * @return int
     */
    public function getNbDownload()
    {
        return $this->nbDownload;
    }

    /**
     * Set nbLike
     *
     * @param integer $nbLike
     *
     * @return Music
     */
    public function setNbLike($nbLike)
    {
        $this->nbLike = $nbLike;

        return $this;
    }

    /**
     * Get nbLike
     *
     * @return int
     */
    public function getNbLike()
    {
        return $this->nbLike;
    }

    /**
     * Set nbComment
     *
     * @param integer $nbComment
     *
     * @return Music
     */
    public function setNbComment($nbComment)
    {
        $this->nbComment = $nbComment;

        return $this;
    }

    /**
     * Get nbComment
     *
     * @return int
     */
    public function getNbComment()
    {
        return $this->nbComment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->playListMusics = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userLikes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set kind
     *
     * @param \AppBundle\Entity\Kind $kind
     *
     * @return Music
     */
    public function setKind(\AppBundle\Entity\Kind $kind = null)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return \AppBundle\Entity\Kind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set interpreter
     *
     * @param \AppBundle\Entity\Artist $interpreter
     *
     * @return Music
     */
    public function setInterpreter(\AppBundle\Entity\Artist $interpreter = null)
    {
        $this->interpreter = $interpreter;

        return $this;
    }

    /**
     * Get interpreter
     *
     * @return \AppBundle\Entity\Artist
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * Set composer
     *
     * @param \AppBundle\Entity\Artist $composer
     *
     * @return Music
     */
    public function setComposer(\AppBundle\Entity\Artist $composer = null)
    {
        $this->composer = $composer;

        return $this;
    }

    /**
     * Get composer
     *
     * @return \AppBundle\Entity\Artist
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Music
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add playListMusic
     *
     * @param \AppBundle\Entity\PlayListMusic $playListMusic
     *
     * @return Music
     */
    public function addPlayListMusic(\AppBundle\Entity\PlayListMusic $playListMusic)
    {
        $this->playListMusics[] = $playListMusic;

        return $this;
    }

    /**
     * Remove playListMusic
     *
     * @param \AppBundle\Entity\PlayListMusic $playListMusic
     */
    public function removePlayListMusic(\AppBundle\Entity\PlayListMusic $playListMusic)
    {
        $this->playListMusics->removeElement($playListMusic);
    }

    /**
     * Get playListMusics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayListMusics()
    {
        return $this->playListMusics;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Music
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
     * Add userLike
     *
     * @param \AppBundle\Entity\UserLike $userLike
     *
     * @return Music
     */
    public function addUserLike(\AppBundle\Entity\UserLike $userLike)
    {
        $this->userLikes[] = $userLike;

        return $this;
    }

    /**
     * Remove userLike
     *
     * @param \AppBundle\Entity\UserLike $userLike
     */
    public function removeUserLike(\AppBundle\Entity\UserLike $userLike)
    {
        $this->userLikes->removeElement($userLike);
    }

    /**
     * Get userLikes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserLikes()
    {
        return $this->userLikes;
    }
}
