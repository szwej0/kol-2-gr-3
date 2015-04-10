Feature: Fikstury dla tabeli Ireland

  Scenario: Lista fixtur z tabeli Ocean
    Given I am on homepage
    Then I should see "Syria"
     When I follow "Syria" 
    Given I am on "syria.html"
     Then I should see "Eufrat"
      And I should see "1234"
     Then I should see "Nahr al-Chabur"
      And I should see "5678"
     Then I should see "Nahr Balich"
      And I should see "910"


