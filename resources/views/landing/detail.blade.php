@extends('landing.mainLanding')

@section('title','Berita DPR RI')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="news-post-wrapper">
        <div class="news-post-wrapper-sm ">
          <h1 class="text-center">
            {{ $newsind->title }}
          </h1>
          <div class="text-center">
            <a href="#" class="btn btn-dark font-weight-bold mb-4">News</a>
          </div>
          <p
            class="fs-15 d-flex justify-content-center align-items-center m-0"
          >
            <img
              src="{{asset('landingpage/images/dashboard/Profile_1.jpg')}}"
              alt=""
              class="img-xs img-rounded mr-2"
            />
            {{ $newsind->user_input }} | {{ $newsind->tanggal_berita }}
          </p>
          
        </div>
        <img
          src="{{asset('landingpage/images/news/news-4.jpg')}}"
          alt="news"
          class="img-fluid mb-4"
        />
        <div class="news-post-wrapper-sm ">
          <p class="pt-4 pb-4 mb-4" style="text-align: justify;">
            {{ $newsind->content }}
          </p>
        </div>
        
        
        
        
      </div>
    </div>
  </div>
</div>
        
@endsection