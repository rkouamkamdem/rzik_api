<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaylistMusic
 *
 * @ORM\Table(name="playlist_music")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlaylistMusicRepository")
 */
class PlaylistMusic
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Playlist", inversedBy="$playListMusics")
     * @ORM\JoinColumn(name="playlist_id", referencedColumnName="id")
     */
    private $playlist;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Music", inversedBy="$playListMusics")
     * @ORM\JoinColumn(name="music_id", referencedColumnName="id")
     */
    private $music;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", unique=true)
     */
    private $position;


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
     * Set position
     *
     * @param integer $position
     *
     * @return PlaylistMusic
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set playlist
     *
     * @param \AppBundle\Entity\Playlist $playlist
     *
     * @return PlaylistMusic
     */
    public function setPlaylist(\AppBundle\Entity\Playlist $playlist = null)
    {
        $this->playlist = $playlist;

        return $this;
    }

    /**
     * Get playlist
     *
     * @return \AppBundle\Entity\Playlist
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }

    /**
     * Set music
     *
     * @param \AppBundle\Entity\Music $music
     *
     * @return PlaylistMusic
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
