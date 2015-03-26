Feature: Web pages

  Scenario: Little
    Given I am on "little.html"
    Then I should see "Many incremental"

  Scenario: LittleMenu
    Given I am on homepage
    When I follow "Little"
    Then I should see "Many incremental"