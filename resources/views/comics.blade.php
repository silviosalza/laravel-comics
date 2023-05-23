@extends('layouts.app')

@section('content')
<div class="comic-container py-4">
    <div class="container">
        <div class="row row-cols-4 g-3">
            @foreach ($comics as $single_comic)
                <div class="col">
                    <div class="card">
                        <img src="{{ $single_comic['thumb'] }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $single_comic['series'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection