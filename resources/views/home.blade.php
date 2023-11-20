@extends('layout.main')

@section('content')
  <div class="container my-5">
    <h1>Film</h1>
    <div class="card_container d-flex flex-wrap justify-content-center mt-5">
        @foreach ($movies as $movie)
        <a class="text-decoration-none" href="{{route('details', ['id'=> $movie->id])}}">
            <div class="card mx-3 my-5" style="width: 18rem;">

                <img class="rounded-top-4" src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">

                <div class="card-body rounded-bottom-4">

                    <h3 class="fw-semibold">{{$movie->title}}</h3>
                    <h6 class="fst-italic">{{$movie->original_title}}</h6>
                    <p class="text-capitalize">{{$movie->nationality}}</p>
                    <p class="fs-6 fst-italic">{{$movie->date}}</p>
                    <p>{{$movie->vote}} <span class="text-warning">&starf;</span></p>

                </div>
            </div>
        </a>
    @endforeach
    </div>
  </div>
@endsection
