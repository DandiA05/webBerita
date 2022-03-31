@extends('landing.mainLanding')

@section('title','Berita DPR RI')


@section('content')

        <div class="container">
          
            @foreach ($categorybyID as $item)
          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Berita {{ $item->category }}</h3>
                </div>
              </div>
            </div>

            <div class="row">
              
                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <img
                    src="{{asset('landingpage/images/dashboard/art.jpg')}}"
                    class="img-fluid"
                    alt="world-news"
                    />
                    <span class="thumb-title">{{ $item->category }}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{ $item->title }}
                  </h5>
                  <p class="fs-15 font-weight-normal" style="height: 105px;">
                    {{ Str::limit($item->content, 100, ' (...)') }}
                  </p>
                  <a href="{{url('landing/detail/' .$item->id )}}" class="font-weight-bold text-dark pt-2">Baca Berita</a>
                </div>
              @endforeach

              
            </div>
        
          </div>

         
        </div>
        
        
@endsection