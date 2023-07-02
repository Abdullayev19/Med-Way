@extends('layouts.hf')

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal" style="font-size: 150px">About Us</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-secondary text-white">
            <span class="mai-chatbubbles-outline"></span>
          </div>
          <p><span>Chat</span> with a doctors</p>
        </div>
      </div>
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-primary text-white">
            <span class="mai-shield-checkmark"></span>
          </div>
          <p><span>One</span>-Health Protection</p>
        </div>
      </div>
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-accent text-white">
            <span class="mai-basket"></span>
          </div>
          <p><span>One</span>-Health Pharmacy</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 wow fadeInUp">

        @foreach ($abouts as $about)
        <h1 class="text-center mb-3">{{$about->title}}</h1>
        <div class="text-lg">
          <p>{{$about->description}}</p>
        </div>
        @endforeach
        
      </div>
      <div class="col-lg-10 mt-5">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
        <div class="row justify-content-center">
          @foreach ($doctors as $doctor)
          <div class="col-md-6 col-lg-4 wow zoomIn">
           
            <div class="card-doctor">
              <div class="header">
                <img src="{{Voyager::image($doctor->image)}}" alt="">
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{$doctor->name}}</p>
                <span class="text-sm text-grey">{{$doctor->job}}</span>
              </div>
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection