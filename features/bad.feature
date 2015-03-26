Feature: Web pages

  Scenario: Bad
    Given I am on homepage
    When I follow "Bad"
    Then I should see "Bad is the best choice."