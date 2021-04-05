@extends('app')
@section('content')

 <!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong">
  <div class="background_img" style="background-color: rgba(0, 0, 0, 0.8);">
   
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
              <h1 class="mb-3">Looking for professional LSA?</h1>
              <h5 class="mb-4">Best Learning Support Assistants</h5>

              <div class="container">
                  <div class="row">
                      <div class="col w-75">
                          <div class="input-group">
                              <input class="form-control py-2 rounded-pill mr-1 pr-5" type="search" value="search" id="example-search-input" />

                              <span class="input-group-append">
                                  <button class="btn rounded-pill border-0 ml-n5" type="button">
                                      <i class="fa fa-search"></i>
                                  </button>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Background image -->

  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
      <div class="container">
          <!--Section: Content-->
          <section>
              <div class="row">
                  <div class="col-md-6 gx-5 mb-4">
                      <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                          <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                          <a href="#!">
                              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                          </a>
                      </div>
                  </div>

                  <div class="col-md-6 gx-5 mb-4">
                      <h4><strong>Recent Posts</strong></h4>
                      <p class="text-muted">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum sapiente illo possimus, commodi dignissimos obcaecati
                          illum maiores corporis.
                      </p>
                      <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
                      <p class="text-muted">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum alias, unde optio accusantium soluta, iusto
                          molestiae adipisci et?
                      </p>
                  </div>
              </div>
          </section>
          <!--Section: Content-->

          <hr class="my-5" />

          <!--Section: Content-->
          <section class="text-center">
              <h4 class="mb-5"><strong>Looking for a Job</strong></h4>

              <div class="row">
                  <div class="col-lg-4 col-md-12 mb-4">
                      <div class="card">
                          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                              <img src="#" class="img-fluid" />
                              <a href="#!">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                              </p>
                              <a href="#!" class="btn btn-primary">Button</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card">
                          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                              <img src="#" class="img-fluid" />
                              <a href="#!">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                              </p>
                              <a href="#!" class="btn btn-primary">Button</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card">
                          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                              <img src="#" class="img-fluid" />
                              <a href="#!">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">
                                  Some quick example text to build on the card title and make up the bulk of the card's content.
                              </p>
                              <a href="#!" class="btn btn-primary">Button</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--Section: Content-->

          <hr class="my-5" />

          <!--Section: Content-->
          <section class="mb-5">
              <h4 class="mb-5 text-center"><strong>Contact Us</strong></h4>

              <div class="row d-flex justify-content-center">
                  <div class="col-md-6">
                      <form action="#" method="POST">
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                          <div class="row mb-4">
                              <div class="col">
                                  <div class="form-outline">
                                      <input type="text" id="form3Example1" placeholder="steve" class="form-control" />
                                      <label class="form-label" for="form3Example1">First name</label>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-outline">
                                      <input type="text" id="form3Example2" placeholder="Mcdonal" class="form-control" />
                                      <label class="form-label" for="form3Example2">Last name</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Email input -->
                          <div class="form-outline mb-4">
                              <input type="email" id="form3Example3" placeholder="example@example.com" class="form-control" />
                              <label class="form-label" for="form3Example3">Email address</label>
                          </div>

                          <!-- Phone number  -->
                          <div class="form-outline mb-4">
                              <input type="phone" id="form3Example3" placeholder="971......." class="form-control" />
                              <label class="form-label" for="form3Example3">Phone Number</label>
                          </div>

                          <!-- Text Area input -->
                          <textarea name="" cols="65" rows="10" placeholder="Tell us how we can support you"> </textarea>

                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block m-4">
                              Sign up
                          </button>
                      </form>
                  </div>
              </div>
          </section>
          <!--Section: Content-->
      </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
          <p>Follow Improv-Ed on social media</p>
          <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
              <i class="fab fa-youtube"></i>
          </a>
          <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
              <i class="fab fa-twitter"></i>
          </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="#">IMprovED Team</a>
      </div>
      <!-- Copyright -->
  </footer>
  <!--Footer-->
</div>

@endsection