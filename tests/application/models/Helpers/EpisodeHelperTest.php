<?php

class EpisodeHelperTest extends PHPUnit_Framework_TestCase
{
    /** @var EpisodeSearch\Helpers\Episode */
    protected $episodeHelper;

    public function setUp()
    {
        $this->episodeHelper = new EpisodeSearch\Helpers\Episode();
    }

    public function testEpisodeCreation()
    {
        $xmlString = <<<XML
<episode>
    <complete_title>Title</complete_title>
    <image_template_url>http://url.com/image</image_template_url>
    <my_short_url>http://url.com</my_short_url>
</episode>
XML;

        $xml = simplexml_load_string($xmlString);
        $episode = $this->episodeHelper->getEpisode($xml);

        $this->assertInstanceOf('EpisodeSearch\Episode', $episode);
        $this->assertEquals('Title', $episode->getTitle());
        $this->assertEquals('http://url.com/image', $episode->getImage());
        $this->assertEquals('http://url.com', $episode->getLink());
    }
}
