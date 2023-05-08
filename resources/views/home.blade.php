@extends('layouts.app')
@section("title", "Home")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <br/>
            <div class="card">
                <div class="card-header">
                    <div class="head"><h1>L'Intelligence Artificielle</h1></div>
                </div>
                <div class="car-body">
                    @foreach ($posts as $posts)
                        <div><h2>{{ $posts->titre }}</h2> </div>
                        <div><strong>Description:</strong> {{ $posts->description }}</div>
                        {{-- <div><strong>Cree le:</strong> {{ $posts->created_at }}</div> --}}
                        <div><strong>Cree le:</strong> {{ $posts->created_at->format('d/m/Y') }}</div>
                        {{-- <div><strong>Derniere MAJ:</strong> {{ $posts->updated_at }}</div><br>   --}}
                        <div><strong>Derniere MAJ:</strong> {{ $posts->updated_at->format('d/m/Y') }}</div>  
                        <a href="{{ route('posts.show', ['id' => $posts->id]) }}">More details...</a>
                        <a href="{{ route('posts.edit', ['id' => $posts->id]) }}">Modifier</a><br>
                        <form action="{{ route('posts.delete', $posts->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Supprimer</button>
                          </form>
                        <br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection