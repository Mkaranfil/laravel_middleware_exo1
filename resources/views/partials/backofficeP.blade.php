<h1 class="text-center" style="text-decoration: underline">Backoffice:</h1>

<h3 style="text-decoration: underline">Article:</h3>

<div>
  @if (session('delete'))
    <div class="alert alert-success" role="alert">
        {{ session('delete') }}
    </div>
@endif
    <table class="table table-dark">
        <thead class="bg-warning text-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">User_id</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($article as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->users->name}}</td>
                <td>
                  <form action="/articles/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  
                  </form>
                </td>
                <td>
                 <a href="articles/{{$item->id}}/edit" class="btn btn-info">Edit</a>
                </td>
            </tr>
              
          @endforeach
        </tbody>
    </table>
</div>

<div>

    <h3 class="mt-5" style="text-decoration: underline">Ajout d'un article:</h3>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form action="/articles" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input class="form-control" type="text" id="titre" name="titre" value="">
        </div>
        <div class="form-group">
            <label for="texte">Texte:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-warning">ajouter</button>
        </div>
    </form>

</div>
