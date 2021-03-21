@extends('templates/main')

@section('content')
<div>

    <h3 class="mt-5" style="text-decoration: underline">Editer un article: </h3>
    @if (session('edit'))
        <div class="alert alert-success" role="alert">
            {{ session('edit') }}
        </div>
    @endif
    <form action="/articles/{{$edit->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input class="form-control" type="text" id="titre" name="titre" value="">
        </div>
        <div class="form-group">
            <label for="texte">Texte:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-warning">Editer</button>
        </div>
    </form>

</div>
    
@endsection