@extends('master')

@section('title', 'Homepage')
    


@section('content')
    <!-- custom slider part start  -->
  <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="{{ asset('custom/img/imgSlider/post-336856-0-18918000-1459704022.jpg') }}" class="imgSlider" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('custom/img/imgSlider/image1.jpg') }}" class="imgSlider" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('custom/img/imgSlider/sur.jpg') }}" class="imgSlider" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- custom slider part end -->
   {{-- teacher list start --}}

   <div class="container">
    <div class="tearcher my-5">
      <h3 class="text-center text-primary">List of our Tearcher</h3>
      <div class="row">
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('custom/img/teachers.png') }}" alt="">
            <div class="card-body">
              <h4 class="card-title">Mr David Rkp</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('custom/img/teachers.png') }}" alt="">
            <div class="card-body">
              <h4 class="card-title">Mr David Rkp</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('custom/img/teachers.png') }}" alt="">
            <div class="card-body">
              <h4 class="card-title">Mr David Rkp</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('custom/img/teachers.png') }}" alt="">
            <div class="card-body">
              <h4 class="card-title">Mr David Rkp</h4>
              <p class="card-text">Lorem ipsum dolor sit amet.</p>
              <a href="" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@endsection