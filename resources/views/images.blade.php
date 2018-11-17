@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center align-items-center p-2 flex-column" style="width: 80%;">
        <div class="card-columns">
        @foreach($photos as $photo)
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset($photo->getUrlPath()) }}" alt="Card image cap">
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
