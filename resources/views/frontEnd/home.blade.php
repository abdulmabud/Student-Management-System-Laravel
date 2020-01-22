@extends('master')

@section('title', 'StMS- Abdul Mabud')
    


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
        <img src="{{ asset('custom/img/imgSlider/slider-01.jpg') }}" class="imgSlider" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('custom/img/imgSlider/slider-02.jpg') }}" class="imgSlider" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('custom/img/imgSlider/slider-03.jpg') }}" class="imgSlider" alt="Third slide">
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
    <div class="tearcher my-5" id="teacher">
      <h3 class="text-center text-primary mb-3">List of our Tearcher</h3>
      <div class="row">
        @foreach ($teachers as $teacher)
            
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('upload/teachers/'.$teacher->photo)}}" alt="No Image" height="250px">
            <div class="card-body">
              <h4 class="card-title">{{ $teacher->Name }}</h4>
              <p class="card-text">{{ $teacher->Email }}</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="noticeboard" id="noticeboard">
      <div class="text-center">
        <h3 class="text-primary">Noticeboard</h3>
      </div>
      <div>
        <table class="table table-bordered">
          <tr>
            <th>Date</th>
            <th>Notice</th>
            <th>Dept</th>
          </tr>
          @foreach ($notices as $notice)
          <tr>
            <td>{{ \Carbon\Carbon::parse($notice->created_at)->format('d-M-y') }}</td>
            <td><a href="{{ route('view.notice', $notice->id) }}" class="noticeTitle">{{ $notice->subject }}</a></td>
            <td>{{ $notice->dept }}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>

    <div class="courses my-5" id="course">
      <h3 class="text-center text-primary">List of our Course</h3>
      <div class="row">
        @foreach ($coures as $course)
            
        <div class="col-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('upload/courses/'.$course->photo) }}" alt="No Image" height="250px">
            <div class="card-body">
              <h4 class="card-title">{{ $course->title }}</h4>
              <a href="#" class="btn btn-primary">Course Detials</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
 
@endsection