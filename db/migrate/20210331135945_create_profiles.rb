class CreateProfiles < ActiveRecord::Migration[6.0]
  def change
    create_table :profiles do |t|
      t.text :personal_statement
      t.string :first_name
      t.string :last_name
      t.string :email_address
      t.string :phone_number
      t.string :nationality
      t.string :gender
      t.date :date_of_birth
      t.string :designation

      t.timestamps
    end
  end
end
