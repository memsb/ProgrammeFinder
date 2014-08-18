<?php
namespace ProgrammeFinder\Helpers;

/**
 * Class Episodes
 *
 * Creates a collection of Episode entities from a given XML document
 */
class Episodes
{
    protected $episodeHelper;

    /**
     * @param Episode $episodeHelper
     */
    public function __construct(Episode $episodeHelper = null)
    {
        if (null == $episodeHelper) {
            $episodeHelper = new Episode();
        }
        $this->episodeHelper = $episodeHelper;
    }

    /**
     * @param $xmlString
     * @return array
     */
    public function getEpisodes($xmlString)
    {
        $xml = simplexml_load_string($xmlString);
        $xml->registerXPathNamespace('ion', 'http://bbc.co.uk/2008/iplayer/ion');
        $results = $xml->xpath("//ion:episode");

        $episodes = array();
        foreach ($results as $result) {
            $episodes[] = $this->episodeHelper->getEpisode($result);
        }

        return $episodes;
    }
}