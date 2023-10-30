@extends('layouts/app');
@extends('layouts/bootstrap');
<div>
   
    @if(session('status'))
        <div class="alert alert-succés" style="color:red;">
            {{session('status')}}

        </div>
    @endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center mt-3">LISTE DES USERS</h2>
            <div class="row">
        <div class="col-1g-12 margin-tb" style="margin-left:90%">
       
        </div>
    </div>
        </div>
      
    </div>
</div>
<table class="table table-bordered border" style="margin-top:50px">
<tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profil</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $users)
                     @if($users->profil === "client" || $users->profil === "admin" )
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->profil}}</td>
                       <td> 
                        <a href="" class="btn btn-info">Details</a>
                        <a href="" class="btn btn-primary">bloquer</a>
                        <a href="{{route('delet', $users->id)}}" class="btn btn-danger">Supprimer</a>
                      
                    </tr>
                    @endif
                    @endforeach
</table>

</div>

