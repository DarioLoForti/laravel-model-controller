@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center text-white py-3">I miei Film</h1>
            @foreach ($movies as $movie)
                <div class="col-3 my-3">
                    <div class="card">
                        <div class="m-3">
                            <h4>{{ $movie->title }}</h4>
                            <h5>Original title: {{ $movie->original_title }}</h5>
                        </div>
                        <div class="py-2">
                            <p>Nationality: {{ $movie->nationality }}</p>
                        </div>
                        <div>
                            <p> Release date: {{ $movie->date }}</p>
                            <p>Vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
