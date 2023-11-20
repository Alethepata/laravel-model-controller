@extends('layout.main')

@section('content')
  <div class="container">
    <h1>Film</h1>
    <div class="card_container d-flex flex-wrap justify-content-center ">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">

                <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">

                <div class="card-body">

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
