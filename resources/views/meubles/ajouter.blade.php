<ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-success">{{$error}}</li>
                @endforeach
            </ul>

    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="form-group">
                <strong>numero:</strong>
                <input type="text" name="numero" class="form-control"  required>
            </div>

        </div>

            <div class="col-xs-12 col-md-12 p-2">
            <div class="form-group">
                <strong>taille:</strong>
                <input type="text" name="taille" class="form-control" required>
            </div>

            <div class="col-xs-12 col-md-12 p-2">
            <div class="form-group">
                <strong>prix:</strong>
                <input type="text" name="prix" class="form-control" required>
            </div>

        </div>
            <div class="col-xs-12 col-md-12 p-2">
            <div class="form-group">
                <strong>description:</strong>
                <input type="text" name="description" class="form-control" required>
            </div>

        </div>
        <div class="col-xs-12 col-md-12 p-2">
        <label for="">img</label>
        <div class="form-group">
            <input type="file" name="img" class="form-control" value="{{old('img')}}">
            <label for="" class="form-control">choisit l'images</label>
            </div>
            </div>
            <div class="form-group">
                            <label for="users_id">Utilisateur</label>
                            <select class="form-control" id="users_id" name="users" required>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="types_id">Type</label>
                            <select class="form-control" id="types_id" name="types" required>
                                 @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </form>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
            <button type="submit" class="btn btn-primary">Valider</button>

        </div>

    </div>
    </form>
