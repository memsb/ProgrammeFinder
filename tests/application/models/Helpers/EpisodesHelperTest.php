<?php

class EpisodesHelperTest extends PHPUnit_Framework_TestCase
{
    protected $episodesHelper;
    protected $mockEpisodeHelper;

    public function setUp()
    {
        $this->mockEpisodeHelper = $this->getMockBuilder('ProgrammeFinder\Helpers\Episode')
            ->disableOriginalConstructor()
            ->getMock();

        $this->episodesHelper = new ProgrammeFinder\Helpers\Episodes($this->mockEpisodeHelper);
    }

    public function testExtractionOfEpisodes()
    {
        $string = <<<XML
<ion xmlns="http://bbc.co.uk/2008/iplayer/ion">
    <blocklist>
        <episode />
        <episode />
        <episode />
    </blocklist>
</ion>
XML;
        $this->mockEpisodeHelper->expects($this->exactly(3))
            ->method('getEpisode')
            ->will($this->returnValue(new \ProgrammeFinder\Episode()));

        $episodes = $this->episodesHelper->getEpisodes($string);
        $this->assertEquals(3, count($episodes));
    }
}
