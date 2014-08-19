<?php

class EpisodeTest extends PHPUnit_Framework_TestCase {

    public function testEpisodeTitleCanBeSet()
    {
        $episode = new \EpisodeSearch\Episode();
        $episode->setTitle('title');
        $this->assertEquals('title', $episode->getTitle());
    }

    public function testEpisodeLinkCanBeSet()
    {
        $episode = new \EpisodeSearch\Episode();
        $episode->setLink('url');
        $this->assertEquals('url', $episode->getLink());
    }

    public function testEpisodeImageCanBeSet()
    {
        $episode = new \EpisodeSearch\Episode();
        $episode->setImage('image_url');
        $this->assertEquals('image_url', $episode->getImage());
    }
}
