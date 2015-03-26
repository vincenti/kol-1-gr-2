Feature: Web pages

  Scenario: Haste makes...
    Given I am on homepage
    When I follow "Haste makes..."
    Then I should see "Haste makes waste"