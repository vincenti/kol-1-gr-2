Feature: Web pages

  Scenario: It is better to die on one's feet than live on one's knees.
    Given I am on homepage
     When I follow "Feet"
     Then I should see "It is better to die on one's feet than live on one's knees."