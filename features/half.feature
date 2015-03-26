Feature: Web pages

  Scenario: Half a loaf...
    Given I am on homepage
    When I follow "Half a loaf..."
    Then I should see "Half a loaf is better than none."