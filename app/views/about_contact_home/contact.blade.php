@extends('app')
@section('content')
    
<div class="image-aboutus-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="lg-text">About Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        
        <div class="col-6 mt-5">
           
                <h4 class="mb-5 text-center"><strong>Contact Us</strong></h4>

                
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
                        <textarea name="" cols="60" rows="10" placeholder="Tell us how we can support you"> </textarea>

                        <!-- Submit button -->
                        <button type="submit" class="btn w-25 btn-primary btn-block m-4">
                            Submit
                        </button>
                    </form>
                
           
        </div>

     
        <div class="col-6">
            <div>
                <div class="panel panel-default mt-5">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                            2217 Washington Blvd<br />
                            Washington DC<br />
                            #(703) 1234 1234<br />
                            service@company.com<br />
                        </div>
                        <hr />
                        <div id="map1" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Google map-->
<div class="container">
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d225.6308642526585!2d55.2752065!3d25.2000581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42816493e4a1%3A0x9991d05586e972fd!2sBoulevard%20Plaza%2C%20Tower%201%20-%20Downtown%20Dubai%20-%20Dubai!5e0!3m2!1sen!2sae!4v1617636699250!5m2!1sen!2sae"
            width="600"
            height="450"
            style="border: 1;"
        ></iframe>
    </div>
</div>

<!--Google Maps-->



@endsection