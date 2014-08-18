<?php

class EpisodeHelperTest extends PHPUnit_Framework_TestCase {

    public function testEpisodeCreation()
    {
        $xml = "<episode>
            <complete_title>The Archers Omnibus: 10/08/2014</complete_title>
        </episode>";

        $episodeHelper = new ProgrammeFinder\Helpers\Episode();
        $episode = $episodeHelper->getEpisode($xml);

        $this->assertInstanceOf('ProgrammeFinder\Episode', $episode);
        $this->assertEquals('The Archers Omnibus: 10/08/2014', $episode->getTitle());
    }
}
