<?php

class FilterTest extends PHPUnit_Framework_TestCase
{
    /** @var \ProgrammeFinder\Filter */
    protected $filter;

    public function setUp()
    {
        $this->filter = new \ProgrammeFinder\Filter();
    }

    public function testUnconfiguredFilterProducesValidUri()
    {
        $uri = $this->filter->getUri();

        $this->assertContains('http://www.bbc.co.uk/iplayer/ion/searchextended/', $uri);
        $this->assertContains('search_availability', $uri);
        $this->assertContains('format', $uri);
    }

    public function testSettingAvailability()
    {
        $this->filter->setSearchAvailability(\ProgrammeFinder\ION::DISCOVERABLE);
        $uri = $this->filter->getUri();

        $this->assertContains('search_availability/' . \ProgrammeFinder\ION::DISCOVERABLE, $uri);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSettingAnInvalidAvailability()
    {
        $this->filter->setSearchAvailability('invalid availability');
    }

    public function testSettingAServiceType()
    {
        $this->filter->setServiceType('radio');
        $uri = $this->filter->getUri();

        $this->assertContains('service_type/radio', $uri);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSettingAnInvalidServiceType()
    {
        $this->filter->setServiceType('invalid service type');
    }

    public function testSettingAResultCount()
    {
        $this->filter->setPerPage(20);
        $uri = $this->filter->getUri();

        $this->assertContains('perpage/20', $uri);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSettingAnInvalidResultCount()
    {
        $this->filter->setPerPage(0);
    }

    public function testAddingASearchQuery()
    {
        $this->filter->setQuery('searchstring');
        $uri = $this->filter->getUri();

        $this->assertContains('q/searchstring', $uri);
    }

    public function testAddingASearchQueryDoubleEncodesCharacters()
    {
        $this->filter->setQuery('<> %');
        $uri = $this->filter->getUri();

        $this->assertContains('q/%253C%253E%2B%2525', $uri);
    }
}
