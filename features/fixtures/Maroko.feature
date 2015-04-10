Feature: Fikstury dla tabeli maroko

  Scenario: fixtures Morocco
    Given I am on homepage
    When I follow "Maroko"
     Then I should see "Melwiyya"
      And I should see "10"
     Then I should see "Wergha"
      And I should see "32"
     Then I should see "Oued Oum er Rbia"
      And I should see "4"

