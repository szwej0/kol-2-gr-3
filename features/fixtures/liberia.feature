Feature: Fikstury dla tabeli liberia

  Scenario: Lista fixtur z tabeli liberia
    Given I am on homepage
    Then I should see "Liberia"
    When I follow "Liberia"
    Given I am on "liberia.html"
    Then I should see "Mano"
    And I should see "150"
    Then I should see "Moa"
    And I should see "12"
    Then I should see "Saint Paul"
    And I should see "130"