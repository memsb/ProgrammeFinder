<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I am on a Web Page$/
     */
    public function iAmOnAWebPage()
    {
        throw new PendingException();
    }

    /**
     * @When /^I type a Search String into a Text Box and Submit$/
     */
    public function iTypeASearchStringIntoATextBoxAndSubmit()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should be shown Results$/
     */
    public function iShouldBeShownResults()
    {
        throw new PendingException();
    }

    /**
     * @Given /^the Search String returns matches for brand name$/
     */
    public function theSearchStringReturnsMatchesForBrandName()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there are available episodes for those brand names$/
     */
    public function thereAreAvailableEpisodesForThoseBrandNames()
    {
        throw new PendingException();
    }

    /**
     * @Then /^these episodes should be returned as results$/
     */
    public function theseEpisodesShouldBeReturnedAsResults()
    {
        throw new PendingException();
    }

    /**
     * @Given /^the Search String returns no matches for brand name$/
     */
    public function theSearchStringReturnsNoMatchesForBrandName()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should be shown a \'([^\']*)\' message$/
     */
    public function iShouldBeShownAMessage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I begin typing a Search String into a Text Box and stop$/
     */
    public function iBeginTypingASearchStringIntoATextBoxAndStop()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there are brand names that contain the string I have typed$/
     */
    public function thereAreBrandNamesThatContainTheStringIHaveTyped()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should be dynamically shown a list of those brands$/
     */
    public function iShouldBeDynamicallyShownAListOfThoseBrands()
    {
        throw new PendingException();
    }

}
