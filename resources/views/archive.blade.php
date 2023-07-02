@extends('layouts.hf')

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Archive</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal" style="font-size: 120px">Archive</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          
          @foreach ($all as $news)

          <div class="col-sm-4 py-3">
    <div class="card-blog">
    <div class="header">
    <a href="/archive/{{$news->id}}" class="post-thumb">
      <img src="{{Voyager::image($news->image)}}" alt="">
    </a>
    </div>
    <div class="body">
    <h5 class="post-title"><a href="/archive/{{$news->id}}">{{$news->title}}</a></h5>
    </div>
    </div>
      </div>

    @endforeach
        </div> <!-- .row -->
      </div>
    </div> <!-- .row -->
  </div> <!-- .container -->
</div> <!-- .page-section -->
@endsection