<style>
    img {
        width: 80px;
    }

    .container {
        margin-left: 50px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 pt-4">
            <div class="form-group">
                <img src="/images/{{ $meubles->img }}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-xs-12 col-md-12 pt-4">
                <div class="form-group">
                    <strong>Numéro:</strong>
                    {{ $meubles->numero }}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Taille:</strong>
                    {{ $meubles->taille }}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Prix:</strong>
                    {{ $meubles->prix }}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $meubles->description }}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Utilisateur:</strong>
                    {{ $meubles->user->name }}
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    {{ $meubles->type->name }}
                </div>
            </div>
            <br>
            <a href="/meubles" class="btn btn-info">Retour</a>
        </div>
    </div>
</div>
