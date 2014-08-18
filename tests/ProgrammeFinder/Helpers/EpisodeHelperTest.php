<?php

class EpisodeHelperTest extends PHPUnit_Framework_TestCase {

    public function testEpisodeCreation()
    {
        $xml = "<episode>
            <complete_title>Title</complete_title>
            <image_template_url>http://url.com/image</image_template_url>
            <my_short_url>http://url.com</my_short_url>
        </episode>";

        $episodeHelper = new ProgrammeFinder\Helpers\Episode();
        $episode = $episodeHelper->getEpisode($xml);

        $this->assertInstanceOf('ProgrammeFinder\Episode', $episode);
        $this->assertEquals('The Archers Omnibus: 10/08/2014', $episode->getTitle());
    }
}
