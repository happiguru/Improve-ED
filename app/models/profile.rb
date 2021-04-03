class Profile < ApplicationRecord
    has_one_attached :picture
    has_one_attached :cv_upload
    has_one_attached :certificate
end
