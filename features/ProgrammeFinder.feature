Feature: [RMUSIC-­767]
  As a user I want to search for available episodes by brand name

  Scenario: Entering a string into a text box to search on.
    Given I am on "index.php"
    When I fill in "search" with "Archers"
    And I press "submit"
    Then I should see "The Archers"

  Scenario: Search string returns matches for a Brand name
    Given I am on "index.php"
    When I fill in "search" with "Archers"
    And I press "submit"
    And the Search String returns matches for brand name
    And there are available episodes for those brand names
    Then these episodes should be returned as results

  Scenario: Search string returns no matches for a Brand name
    Given I am on "index.php"
    When I fill in "search" with "Archers"
    And I press "submit"
    And the Search String returns no matches for brand name
    Then I should be shown a 'no results' message

  Scenario: Begin entering a string into a text box to search on and pause.
    Given I am on "index.php"
    When I fill in "search" with "Archers"
    And I wait 1 second
    And there are brand names that contain "Archers"
    Then I should be dynamically shown a list containing "The Archers"
