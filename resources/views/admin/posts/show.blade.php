@extends('layouts.app')

@section('content')

<div class="container text-center d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
        <img src="{{ $post['post_image'] }}" class="card-img-top p-3" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['post_content'] }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $post['author'] }}</li>
            <li class="list-group-item">{{ $post['post_date'] }}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">EDIT</a>
            <a href="#" class="card-link">DELETE</a>
        </div>
    </div>
</div>

@endsection