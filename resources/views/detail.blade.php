@extends('layouts.app')
@section("title", "Detail de post")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    <h1>{{ $post->titre }}</h1>
                    <img src="{{ Storage::url($post->image->path) }}" alt="Image" width="250">
                    <p><strong>Description :</strong> {{ $post->description }}</p>
                    <p><strong>Detail :</strong> {{ $post->detail }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
