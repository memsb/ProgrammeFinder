<?php

class EpisodeTest extends PHPUnit_Framework_TestCase {

    public function testEpisodeTitleCanBeSet()
    {
        $episode = new ProgrammeFinder\Episode();
        $episode->setTitle('title');
        $this->assertEquals('title', $episode->getTitle());
    }

    public function testEpisodeLinkCanBeSet()
    {
        $episode = new ProgrammeFinder\Episode();
        $episode->setLink('url');
        $this->assertEquals('link', $episode->getLink());
    }

    public function testEpisodeImageCanBeSet()
    {
        $episode = new ProgrammeFinder\Episode();
        $episode->setImage('image_url');
        $this->assertEquals('test title', $episode->getImage());
    }
}
