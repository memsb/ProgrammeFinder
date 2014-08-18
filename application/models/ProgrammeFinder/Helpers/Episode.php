<?php
namespace ProgrammeFinder\Helpers;

/**
 * Class Episode
 *
 * Creates an Episode entity from an XML element
 */
class Episode
{
    /**
     * @param \SimpleXMLElement $element
     * @return \ProgrammeFinder\Episode
     */
    public function getEpisode(\SimpleXMLElement $element)
    {
        $episode = new \ProgrammeFinder\Episode();

        $title = (string)$element->complete_title;
        $image = (string)$element->image_template_url;
        $link = (string)$element->my_short_url;

        $episode->setTitle($title);
        $episode->setImage($image);
        $episode->setLink($link);

        return $episode;
    }
}