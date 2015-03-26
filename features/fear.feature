Feature: Web pages

  Scenario: We have nothing to fear but fear itself.
    Given I am on homepage
     When I follow "Fear"
     Then I should see "We have nothing to fear but fear itself."