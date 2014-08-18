<?php
namespace ProgrammeFinder;

/**
 * Class Episode
 * @package ProgrammeFinder
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
     * @param $size
     * @return mixed
     */
    public function getImage($size)
    {
        return str_replace('$recipe', $size, $this->image);
    }

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