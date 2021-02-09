Feature: Create a new subscriber
  In order to create a new subscriber
  As an admin user
  I must be able to save a new subscriber's details

  Scenario: Login and create a subscriber
    Given I have logged in as an administrator
    Given I follow "Subscribers"
    Given I follow "Search subscribers"
    Given I follow "Add a subscriber"
    Then I should see "Email address"
    When I fill in "email" with an email address
    And I press "change"
    Then I should see "subscriber profile"
    Then I should see "Add to blacklist"
    And I follow "Search subscribers"
    Then I should see the email address I entered