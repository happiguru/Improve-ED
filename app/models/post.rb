class Post < ApplicationRecord
  validates :postcontent, presence: true, length: { maximum: 140,
                                                    too_long: '140 characters in post is the maximum allowed.' }
  belongs_to :user, foreign_key: :user_id
  has_many :replies, dependent: :destroy
  has_many :likes, dependent: :destroy
end
