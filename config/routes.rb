Rails.application.routes.draw do
  get 'users/index'
  get 'users/show'
  get 'main/about'
  get 'main/contact'
  devise_for :users, :controllers => { registrations: 'registrations' }
  resources :posts do
    resources :replies, only: %i[create destroy]
    resources :likes, only: %i[create destroy]
  end
  resources :users do
    member do
      get :following, :followers
    end
  end
  resources :relationships, only: %i[create destroy]
  # For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  root 'users#index'
end
