Feature: Fikstury dla tabeli Kazachstan
  

    Scenario: Lista fixtur z tabeli Kazachstan
    Given I am on homepage
    Then I should see "Kazachstan"
     When I follow "Kazachstan" 
    Given I am on "kazachstan.html"
     Then I should see "Uba"
      And I should see "1234"
     Then I should see "Lepsy"
      And I should see "9876"
     Then I should see "Nura"
      And I should see "3434"