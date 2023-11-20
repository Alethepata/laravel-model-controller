@extends('layout.main')

@section('content')
  <div class="container my-5">
     <h1>{{$movies->title}}<h1>
        <div class="content d-flex align-items-center mt-5">
            <img class="rounded-4 w-25" src="{{$movies->image}}" class="card-img-top" alt="{{$movies->title}}">

            <div class="text ms-5">
                <h3 class="fw-semibold">{{$movies->title}}</h3>
                <h6 class="fst-italic">{{$movies->original_title}}</h6>
                <p class="text-capitalize fs-4">{{$movies->nationality}}</p>
                <p class="fs-6 fst-italic">{{$movies->date}}</p>
                <p class="fs-4">{{$movies->vote}} <span class="text-warning">&starf;</span></p>

            </div>

        </div>

        <a href="{{route('home')}}" class="btn btn-primary">Home</a>

  </div>
@endsection
