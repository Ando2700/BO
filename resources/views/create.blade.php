@extends("layouts.app")
@section("title", "Creer post")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
            <div class="card">
                <div class="card-head">
                    @if ($errors->any())
                    @foreach($errors->all() as $error)    
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif
	                <h1>Creer un poste</h1>
                    @if ($errors->any())
                    @foreach($errors->all() as $error)    
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                    @endif
                </div>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p>
                        <label for="titre"><strong>Titre:</strong></label><br/>
                        <input type="text" name="titre" id="titre" placeholder="Le titre du post" >
                    </p>

                    <p>
                        <label for="description"><strong>Description:</strong></label><br/>
                        <textarea name="description" id="description" lang="fr" rows="5" cols="50" placeholder="La description du post" ></textarea>
                    </p>

                    <p>
                        <label for="detail"><strong>Details:</strong></label><br/>
                        <textarea name="detail" id="detail" lang="fr" rows="10" cols="50" placeholder="Le detail du post" ></textarea>
                    </p>
                    <p>Ajouter une image: <input type="file" name="avatar" id="avatar" class="" accept="image/png, image/jpeg" required><br/></p>
                    <p>
                        <label for="date"><strong>Update at:</strong></label><br>
                        <input type="datetime-local" name="updated_at" id="updated_at">
                    </p>
                    <p>
                        <label for="date"><strong>Date:</strong></label><br>
                        <input type="datetime-local" name="created_at" id="created_at">
                    </p>

                    <input class="btn btn-primary" type="submit" name="valider" value="Valider" >
                </form>
            </div>
        </div>
    </div>
</div>
@endsection