@extends('app')
@section('content')
<div class="image-aboutus-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="lg-text">About Us</h1>
                
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 about_us p-3">
            <h4>About us</h4>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, non nisi id ullam dignissimos odit eaque. Minus, neque similique! Voluptatem, cupiditate enim quis dolorum consequuntur fugiat, maiores, id omnis beatae aut
            inventore qui libero quidem sequi earum magnam obcaecati velit expedita dolorem. Dolore repellendus itaque deserunt. Reiciendis, quam? Impedit vero ducimus, perferendis maiores esse ipsum molestias rerum officia atque odit
            cupiditate, earum ratione similique adipisci tempora corporis ad incidunt quas inventore nulla cum. Quod earum at ex impedit. Quidem quis illum tempore deleniti, soluta in delectus corporis suscipit maxime, voluptates et
            repudiandae exercitationem neque, fugiat libero quibusdam voluptatibus qui nulla!
        </div>

        <div class="col-6 about_img p-3">
            <img src="{{ '/images/profile.jpg' }}" class="description" alt="Rounded Image" />
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
        <h3>
            Meet Our Team
        </h3>
    </div>
    <div class="row">
        <div class="col-4 team-box">
            <img src="{{ '/images/profile.jpg' }}" />
            <div class="team-content">
                <h3>David Smith</h3>
                <div class="border-team"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
            </div>
        </div>

        <div class="col-4 team-box">
            <img src="{{ '/images/profile.jpg' }}" />
            <div class="team-content">
                <h3>David Smith</h3>
                <div class="border-team"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
            </div>
        </div>

        <div class="col-4 team-box">
            <img src="{{ '/images/profile.jpg' }}" />
            <div class="team-content">
                <h3>David Smith</h3>
                <div class="border-team"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
            </div>
        </div>
    </div>
</div>

@endsection