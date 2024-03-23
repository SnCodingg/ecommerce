@extends('master')
@section('content')
<div class="container mt-3 mb-3">
    <div class="row">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1 ? 'active' : ""}}" data-bs-interval="10000">
                    <img src="{{$item['gallery']}}" class="d-block w-20 slider-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{$item['name']}}</h5>
                      <p>{{$item['description']}}</p>
                    </div>
                  </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h1 class="mt-5">Trending Products</h1>
          <div class="trending-wrapper">
            @foreach ($products as $item)
            <div class="trending-item">
                <img src="{{$item['gallery']}}" class="d-block w-20 trending-img" alt="...">
                <div class="">
                  <h5>{{$item['name']}}</h5>
                  <p>{{$item['description']}}</p>
                </div>
              </div>
            @endforeach
        </div>
</div>
</div>
@endsection