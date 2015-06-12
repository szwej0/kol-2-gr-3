Feature: Fikstury dla rosja

  Scenario: Lista fixtur dla rosja
    Given I am on homepage
    When I follow "rosja..."
    Given I am on "rosja.html"
     Then I should see "Moskwa"
      And I should see "12"
     Then I should see "Petersburg"
      And I should see "14"
     Then I should see "Samara"
      And I should see "15"