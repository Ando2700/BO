@extends("layouts.app")
@section("title", "Editer un post")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
            <div class="card">
                <div class="card-head">
	                <h1>Editer votre post</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error!</strong> <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
	                <form method="POST" action="{{ route('posts.update', $posts->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <p>
                        <label for="titre"><strong>Titre:</strong></label><br/>
                        <input type="text" name="titre" value="{{ $posts->titre }}"  id="titre" placeholder="Le titre du post" >
                    </p>

                    <p>
                        <label for="description"><strong>Description:</strong></label><br/>
                        <textarea name="description" id="description" lang="fr" rows="5" cols="50" placeholder="Le contenu du post" >{{ $posts->description }}</textarea>
                    </p>

                    <p>
                        <label for="detail"><strong>Details:</strong></label><br/>
                        <textarea name="detail" id="detail" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ $posts->detail }}</textarea>
                    </p>

                    <p>
                        <label for="date"><strong>Update at:</strong></label><br>
                        <input type="datetime-local" value="{{ $posts->updated_at }}" name="updated_at" id="updated_at">
                    </p>
                    <p>
                        <label for="date"><strong>Date de creation:</strong></label><br>
                        <input type="datetime-local" value="{{ $posts->created_at }}" name="created_at" id="created_at">
                    </p>

                    <input class="btn btn-primary" type="submit" name="valider" value="Valider" >
                </form>
            </div>
        </div>
    </div>
</div>
@endsection