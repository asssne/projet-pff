@extends('layouts/bootstrap')
<a href="{{('/ajouter')}}" class="btn btn-primary">Poster de nouveau culture</a>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rHyoN1jc3z5IX5Sldn1j6u6B4p7fO8shB1Fj5g5uAt6tj0UqFv4vF04Je3z5zs1I" crossorigin="anonymous">


<style>
    img{
        width: 100%;
        height: 300px;  
    }
    .diane{
    display: grid;
    grid-template-columns:repeat(3,1fr);
    gap:8px;

    }
    .karim{
       text-align: center;
    }
</style>
<div class="diane">

    @foreach ($meubles as $meubles)
    <div>
    
    <p><img src="{{ asset('images/' . $meubles->img) }}" alt="Image" width="100"> </td></p>
    <div class="karim">
        <a href="{{route('show', $meubles->id)}}" class="btn btn-info">Details</a>
    </div>
    
</div>

    @endforeach


</div>
<a href="{{('login')}}" class="btn btn-primary p-2 m-2 pt-2" >retour</a>
<a href="{{('/')}}" class="btn btn-primary p-2 m-2 pt-2" >Accueil</a>