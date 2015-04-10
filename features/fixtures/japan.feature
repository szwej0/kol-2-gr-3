Feature: Fikstury dla tabeli japan

  Scenario: Lista fixtur z tabeli japan
    Given I am on homepage
    When I follow "Rivers in Japan"
     Then I should see "Teshio"
      And I should see "3"
     Then I should see "Tone"
      And I should see "4"
     Then I should see "Hannoki"
      And I should see "5"