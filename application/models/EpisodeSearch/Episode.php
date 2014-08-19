<?php
namespace EpisodeSearch;

/**
 * Class Episode
 * @package EpisodeSearch
 *
 * Episode entity
 */
class Episode
{
    protected $title;
    protected $image;
    protected $link;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return bool
     */
    public function hasImage()
    {
        return !empty($this->image);
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}