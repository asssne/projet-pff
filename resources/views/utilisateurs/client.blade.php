@extends('cultures.layout')
<div>
    @if(session('status'))
        <div class="alert alert-succés" style="color:red;">
            {{session('status')}}

        </div>
    @endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center mt-3">CRUD IN LARAVEL 10</h2>
            <div class="row">
        <div class="col-1g-12 margin-tb" style="margin-left:90%">
       
        </div>
    </div>
        </div>
      
    </div>
</div>
<div>
    

</div>
<table class="table table-bordered border" style="margin-top:50px">
<tr>
        <th>ID</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>AGE</th>
        <th>SEXE</th>
        <th>NUMTEL</th>
        <th>ADRESS</th>
        <th>EMAIL</th>
        <th rowspan="1">Actions</th>
    </tr>
    @foreach ($clients as $client)
    <tr>
        <td>{{$cultivateur->id}}</td>
        <td>{{$cultivateur->nom}}</td> 
        <td>{{$cultivateur->prenom}}</td>
        

       
        


    </tr>
    @endforeach
</table>
</div>

