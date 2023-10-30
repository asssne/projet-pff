<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Bien Immobilier</title>
</head>
<body>
    <form action="{{ route('update', $meubles->id) }}" method="post" enctype="multipart/form-data">
        

        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Numéro :</strong>
                    <input type="text" name="numero" class="form-control" placeholder="Numéro" required value="{{ $meubles->numero }}">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 p-2">
                <div class="form-group">
                    <strong>Taille :</strong>
                    <input type="text" name="taille" class="form-control" placeholder="Taille" required value="{{ $meubles->taille }}">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 p-2">
                <div class="form-group">
                    <strong>Prix :</strong>
                    <input type="text" name="prix" class="form-control" placeholder="Prix" required value="{{ $meubles->prix }}">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 p-2">
                <div class="form-group">
                    <strong>Description :</strong>
                    <input type="text" name="description" class="form-control" placeholder="Description" required value="{{ $meubles->description }}">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 p-2">
                <label for="">img</label>
                 <div class="form-group">
                    
                <input type="file" name="img" class="form-input" required value="{{$meubles->img}}">
                <label for="" class="form-label">choisit l'images</label>
                </div>
            </div>
            <div class="form-group">
                <label for="users_id">Utilisateur</label>
                <select class="form-control" id="users_id" name="users_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id === $meubles->users_id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="types_id">Type</label>
                <select class="form-control" id="types_id" name="types_id" required>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id === $meubles->types_id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form>
</body>
</html>
