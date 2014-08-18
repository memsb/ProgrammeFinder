<?php

class EpisodeTest extends PHPUnit_Framework_TestCase {

    public function testEpisodeTitleCanBeSet()
    {
        $episode = new ProgrammeFinder\Episode();
        $episode->setTitle('test title');
        $this->assertEquals('test title', $episode->getTitle());
    }
}
