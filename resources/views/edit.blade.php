<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modifier</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="card shadow border-0 mx-auto" style="max-width:600px">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Modifier utilisateur</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('update', $users->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" value="{{ $users->nom }}">
                    </div>
                        <div class="mb-2">
                        <label class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="{{ $users->prenom }}">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $users->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Âge</label>
                        <input type="number" name="age" class="form-control" value="{{ $users->age }}">
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="/" class="btn btn-secondary">Annuler</a>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>