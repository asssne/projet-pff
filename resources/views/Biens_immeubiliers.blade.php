@extends('layouts/bootstrap')
<a href="{{('/ajouter')}}" class="btn btn-primary">Poster de nouveau culture</a>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rHyoN1jc3z5IX5Sldn1j6u6B4p7fO8shB1Fj5g5uAt6tj0UqFv4vF04Je3z5zs1I" crossorigin="anonymous">

<table class="table table-dark table-striped">
<style>
    img{
        width: 50px;
        
    }
</style>


<tr>
        <th>ID</th>
        <th>numero</th>
        <th>taille</th>
        <th>prix</th>
        <th>image</th>
        <th>description</th>
        <th>users</th>
        <th>types</th>
        <th rowspan="1">Actions</th>
    </tr>
    @foreach ($meuble as $meubles)
    
    <tr>
        <td>{{$meubles->id}}</td>
        <td>{{$meubles->numero}}</td> 
        <td>{{$meubles->taille}}</td>
        <td>{{$meubles->prix}}</td>
        <td>
        <img src="{{ asset('images/' . $meubles->img) }}" alt="Image" width="100">
        </td>
        <td>{{$meubles->description}}</td>
        <td>{{$meubles->users_id}}</td>
        <td>{{$meubles->types_id}}</td>
                               

        <td>
            <form action="#" method="POST">
                <a href="{{route('edit', $meubles->id)}}" class="btn btn-primary">Modifier</a>
                <a href="{{route('show', $meubles->id)}}" class="btn btn-info">Details</a>
                <a href="{{route('delete', $meubles->id)}}" class="btn btn-danger">Supprimer</a>
            </form>
        </td>

        


    </tr>
    
    @endforeach
</table>
</div>
<a href="{{('login')}}" class="btn btn-primary p-2 m-2 pt-2" >retour</a>
<a href="{{('/')}}" class="btn btn-primary p-2 m-2 pt-2" >Accueil</a>