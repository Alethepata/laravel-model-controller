@extends('layout.main')

@section('content')
  <div class="container my-5">
    <h1>Film</h1>
    <div class="card_container d-flex flex-wrap justify-content-center mt-5">
        @foreach ($movies as $movie)
            <div class="card mx-3 my-4" style="width: 18rem;">

                <img class="rounded-top-4" src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">

                <div class="card-body rounded-bottom-4">

                    <h3>{{$movie->title}}</h3>
                    <h6>{{$movie->original_title}}</h6>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>

                </div>
            </div>
    @endforeach
    </div>
  </div>
@endsection
