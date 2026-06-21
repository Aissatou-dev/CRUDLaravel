<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">
                Liste des utilisateurs
            </h4>
            <a href="index" class="btn btn-light btn-sm">
                <i class="bi bi-person-plus"></i>
                Ajouter
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($utilisateur as $user)
                        <tr>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->prenom }}
                            </td>
                            <td>
                                {{ $user->nom }}
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $user->age }}</span>
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                <span class="badge bg-success">{{ $user->role }} </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('edit',$user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i>Modifier</a>
                                <form action="{{ route('delete',$user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"onclick="return confirm('Voulez-vous supprimer cet utilisateur ?')">
                                        <i class="bi bi-trash"></i>Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>