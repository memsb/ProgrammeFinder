<?php

class FinderTest extends PHPUnit_Framework_TestCase
{
    protected $mockFilter;
    protected $mockEpisodesHelper;

    public function setUp()
    {
        $this->mockFilter = $this->getMockBuilder('ProgrammeFinder\Filter')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockEpisodesHelper = $this->getMockBuilder('ProgrammeFinder\Helpers\Episodes')
            ->disableOriginalConstructor()
            ->getMock();

        $this->mockEpisodesHelper->expects($this->once())
            ->method('getEpisodes')
            ->will($this->returnValue(array()));
    }

    public function testGettingEpisodes()
    {
        $finder = $this->getMockBuilder('ProgrammeFinder\Finder')
            ->setConstructorArgs(array($this->mockFilter, $this->mockEpisodesHelper))
            ->setMethods(array('getData'))
            ->getMock();

        $episodes = $finder->getEpisodes();

        $this->assertEmpty($episodes);
    }
}
