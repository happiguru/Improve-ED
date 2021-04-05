require "application_system_test_case"

class ProfilesTest < ApplicationSystemTestCase
  setup do
    @profile = profiles(:one)
  end

  test "visiting the index" do
    visit profiles_url
    assert_selector "h1", text: "Profiles"
  end

  test "creating a Profile" do
    visit profiles_url
    click_on "New Profile"

    fill_in "Date of birth", with: @profile.date_of_birth
    fill_in "Designation", with: @profile.designation
    fill_in "Email address", with: @profile.email_address
    fill_in "First name", with: @profile.first_name
    fill_in "Gender", with: @profile.gender
    fill_in "Last name", with: @profile.last_name
    fill_in "Nationality", with: @profile.nationality
    fill_in "Personal statement", with: @profile.personal_statement
    fill_in "Phone number", with: @profile.phone_number
    click_on "Create Profile"

    assert_text "Profile was successfully created"
    click_on "Back"
  end

  test "updating a Profile" do
    visit profiles_url
    click_on "Edit", match: :first

    fill_in "Date of birth", with: @profile.date_of_birth
    fill_in "Designation", with: @profile.designation
    fill_in "Email address", with: @profile.email_address
    fill_in "First name", with: @profile.first_name
    fill_in "Gender", with: @profile.gender
    fill_in "Last name", with: @profile.last_name
    fill_in "Nationality", with: @profile.nationality
    fill_in "Personal statement", with: @profile.personal_statement
    fill_in "Phone number", with: @profile.phone_number
    click_on "Update Profile"

    assert_text "Profile was successfully updated"
    click_on "Back"
  end

  test "destroying a Profile" do
    visit profiles_url
    page.accept_confirm do
      click_on "Destroy", match: :first
    end

    assert_text "Profile was successfully destroyed"
  end
end
