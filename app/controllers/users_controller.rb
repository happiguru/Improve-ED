class UsersController < ApplicationController
  # before_action :authenticate_user!
  def index
    @users = User.all
   # @followed_and_user = current_user.followed_users
  end

  def show
    @user = User.find(params[:id])
    @posts = @user.posts.order('created_at DESC')
  end
end
