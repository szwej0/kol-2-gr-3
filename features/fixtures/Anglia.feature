Feature: Fikstury dla Angli

  Scenario: Lista fixtur dla Angli
    Given I am on homepage
    When I follow "Anglia..."
    Given I am on "Anglia.html"
     Then I should see "Tamiza"
      And I should see "12"
     Then I should see "Severn"
      And I should see "14"
     Then I should see "Trent"
      And I should see "15"