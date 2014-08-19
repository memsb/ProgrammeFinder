<?php
namespace EpisodeSearch;

use EpisodeSearch\Helpers\Episodes;

/**
 * Class Finder
 * @package EpisodeSearch
 *
 * Performs an episode search using ION
 */
class Finder
{
    protected $filter;
    protected $episodesHelper;

    /**
     * @param Filter $filter
     * @param Episodes $episodesHelper
     */
    public function __construct(Filter $filter, Episodes $episodesHelper = null)
    {
        if (null == $episodesHelper) {
            $episodesHelper = new Episodes();
        }
        $this->filter = $filter;
        $this->episodesHelper = $episodesHelper;
    }

    /**
     * @return array
     */
    public function getEpisodes()
    {
        $output = $this->getData();
        return $this->episodesHelper->getEpisodes($output);
    }

    /**
     * @return string
     */
    protected function getData()
    {
        $ch = \curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->filter->getUri());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}