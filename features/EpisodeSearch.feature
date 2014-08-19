Feature: [RMUSIC-­767]
  As a user I want to search for available episodes by brand name

  Scenario: Entering a string into a text box to search on.
    Given I am on the homepage
    When I fill in "searchBox" with "test"
    And I press "search"
    And I wait for the results
    Then I should see "Test Match Special"

  Scenario: Search string returns no matches for a Brand name
    Given I am on the homepage
    When I fill in "searchBox" with "somethingthatdoesntmatch"
    And I press "search"
    And I wait for the results
    Then I should see "no results"

  Scenario: Begin entering a string into a text box to search on and pause.
    Given I am on the homepage
    When I fill in "searchBox" with "test"
    And I wait for the results
    Then I should see "Test Match Special"
