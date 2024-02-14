@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">i miei film</h1>
                <div class="col-12 py-5">
                    <a href="{{ route('index_movies') }}" class="btn btn-sm btn-primary ">Vai!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
