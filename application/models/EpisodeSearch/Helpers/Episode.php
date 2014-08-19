<?php
namespace EpisodeSearch\Helpers;

/**
 * Class Episode
 *
 * Creates an Episode entity from an XML element
 */
class Episode
{
    /**
     * @param \SimpleXMLElement $element
     * @return \EpisodeSearch\Episode
     */
    public function getEpisode(\SimpleXMLElement $element)
    {
        $episode = new \EpisodeSearch\Episode();

        $title = (string)$element->complete_title;
        $image = (string)$element->image_template_url;
        $link = (string)$element->my_short_url;

        $episode->setTitle($title);
        $episode->setImage($image);
        $episode->setLink($link);

        return $episode;
    }
}