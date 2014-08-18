<?php

class EpisodeHelperTest extends PHPUnit_Framework_TestCase
{
    protected $episodeHelper;

    public function setUp()
    {
        $this->episodeHelper = new ProgrammeFinder\Helpers\Episode();
    }

    public function testEpisodeCreation()
    {
        $xmlString = <<<XML
<episode>
    <complete_title>The Archers Omnibus: 10/08/2014</complete_title>
</episode>
XML;

        $xml = simplexml_load_string($xmlString);
        $episode = $this->episodeHelper->getEpisode($xml);

        $this->assertInstanceOf('ProgrammeFinder\Episode', $episode);
        $this->assertEquals('The Archers Omnibus: 10/08/2014', $episode->getTitle());
    }
}
