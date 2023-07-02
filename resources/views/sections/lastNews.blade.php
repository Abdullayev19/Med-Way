
  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">@foreach ($lastnews as $news)
    <div class="col-lg-4 py-2 wow zoomIn">
    <div class="card-blog">
    <div class="header">
    <a href="/news" class="post-thumb">
    <img src="{{Voyager::image($news->image)}}" alt="">
      </a>
  </div>
  <div class="body">
  <h5 class="post-title"><a href="/news">{{$news->title}}</a></h5>
  </div>
  </div>
        </div>@endforeach
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/news" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->