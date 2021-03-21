




<div>
    <h1 class="text-center" style="text-decoration: underline">Articles:</h1>

    @foreach ($article as $item)
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$item->titre}}</h5>
                <p class="card-text">{{$item->texte}}</p>
            
                <p class="card-text">Auteur: {{$item->users->name}}</p>  
             
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</div>