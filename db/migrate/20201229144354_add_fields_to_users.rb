class AddFieldsToUsers < ActiveRecord::Migration[6.0]
  def change
    add_column :users, :fullname, :string
    add_column :users, :personalstatement, :text
    add_column :users, :dob, :date
    add_column :users, :nationality, :string
    add_column :users, :gender, :string
    add_column :users, :contact, :string
    add_column :users, :designation, :string
    add_column :users, :address, :string
    add_column :users, :state, :string
    add_column :users, :countryofresidence, :string
  end
end
