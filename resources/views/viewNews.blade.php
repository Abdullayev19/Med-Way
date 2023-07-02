@extends('layouts.hf')

@section('content')

<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/news">News</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-12">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{Voyager::image($item->image)}}" alt="" >
            </div>
            <h2 class="post-title h1">{{$item->title}} </h2>
            <div class="post-content">
              <p>{{$item->description}} </p>
            </div>
          </article> <!-- .blog-details -->
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@endsection