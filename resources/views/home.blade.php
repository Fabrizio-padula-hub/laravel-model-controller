@extends('layouts.app')

@section('content')
    <div>
        <h1>Film</h1>
        @foreach ($movie as $singleMovie)
                {{-- Single book template --}}
                <div class="col">
                    <div class="movie my-3">
                        <h3>{{ $singleMovie->title }}</h3>
                        <div>Autore: {{ $singleMovie->nationality }}</div>
                        <div>Pagine: {{ $singleMovie->vote }}</div>
                    </div>
                </div>        
            @endforeach
        
    </div>
@endsection