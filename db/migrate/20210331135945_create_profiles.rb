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
      t.string :school
      t.string :highest_qualification
      t.string :institution
      t.string :job_title
      t.date :start_date
      t.date :end_date
      t.string :reference_name
      t.string :reference_email
      t.string :institution2
      t.string :job_title2
      t.date :start_date2
      t.date :end_date2
      t.string :reference_name2
      t.string :reference_email2
      t.string :institution3
      t.string :job_title3
      t.date :start_date3
      t.date :end_date3
      t.string :reference_name3
      t.string :reference_email3
      

      t.timestamps
    end
  end
end
