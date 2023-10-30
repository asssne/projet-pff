@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-12 pt-4">
            <div class="form-group">
                <strong>Name:</strong>
                {{$data->name}}
            </div>

        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <strong>profil:</strong>
                {{$data->profil}}
                </div>

        </div>
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {{$data->email}}
                </div>

        </div>
       
        <a href="{{route('users')}}" class="btn btn-primary p-2 m-2 pt-2" >retour</a>
        <a href="{{('/')}}" class="btn btn-primary p-2 m-2 pt-2" >accueil</a>
    
       

    </div>
    
@endsection