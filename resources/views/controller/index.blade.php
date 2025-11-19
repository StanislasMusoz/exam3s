<div class="container">
    <h1>Formulaire Laravel</h1>

    <form method="post" action="submit">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input id="password" name="password" type="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" name="commentaire" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    @if(isset($name))
        <h2>Données reçues :</h2>
        <p>{{ $name }}</p>
        <p>{{ $password }}</p>
        <p>{{ $commentaire }}</p> {{-- Enlever la vulnérabilité XSS --}}
    @else
        <p>Vide</p>
    @endif
</div>

