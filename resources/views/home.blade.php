@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Film</h1>
        <div class="row">
            @foreach ($movie as $singleMovie)
                {{-- Single card --}}
                <div class="col-2">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $singleMovie->title }}
                            </h5>
        
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                @if ($singleMovie->nationality === 'american')
                                    Nazionalità: Americana
                                @else
                                    <h6 class="card-subtitle mb-2 text-body-secondary">
                                        Nazionalità: Ibrida
                                    </h6>
                                @endif
                                
                            </h6>
                            
                            <p class="card-text">Voto: {{ $singleMovie->vote }}</p>
                        </div>
                    </div>
                </div>
                          
            @endforeach
            
        </div>
    </div>
@endsection