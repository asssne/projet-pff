@extends('layouts/bootstrap')
<table class="table table-bordered border" style="margin-top:50px">
<style>
    img{
        width: 50px;
        
    }
</style>
<tr>
        <th>ID</th>
        <th>DATE DE DEBUT</th>
        <th>DATE DE SORTIE</th>
        <th>NOMBRE</th>
        
        <th>users</th>
        <th>biens_immeubiliers</th>
        <th rowspan="1">Actions</th>
    </tr>
    @foreach ($reserve as $reserves)
    
    <tr>
        <td>{{$reserves->id}}</td>
        <td>{{$reserves->date_debut}}</td> 
        <td>{{$reserves->date_sortie}}</td>
        <td>{{$reserves->nombre}}</td>
        <td>{{$reserves->users_id}}</td>
        <td>{{$reserves->biens_immeubiliers_id}}</td>

        <td>
            <form action="#" method="POST">
                <a href="" class="btn btn-info">Details</a>
                <a href="" class="btn btn-primary">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
              


            </form>
        </td>

        


    </tr>
    
    @endforeach
</table>
</div>
<a href="{{('login')}}" class="btn btn-primary p-2 m-2 pt-2" >retour</a>
<a href="{{('/')}}" class="btn btn-primary p-2 m-2 pt-2" >Accueil</a>