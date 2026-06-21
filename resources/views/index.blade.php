<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow border-0 mx-auto"style="max-width:600px;">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0"> Ajouter un utilisateur</h4>
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nom </label>
                    <input type="text" name="nom" class="form-control" placeholder="Donnez votre nom">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Prénom </label>
                    <input type="text" name="prenom" class="form-control" placeholder="Donnez votre prénom">
                </div>
                <div class="mb-3">
                    <label class="form-label"> Email </label>
                    <input type="email" name="email" class="form-control" placeholder="Donnez votre email">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Donnez votre mot de passe">
                    @error('password')
                        <div class="text-danger mt-1"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age"class="form-control"placeholder="Donnez votre âge">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/" class="btn btn-secondary"> ← Retour</a>
                    <button type="submit"class="btn btn-success"> Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>