<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create a Project</title>
    <style>
        form {
            /* display: flex; */
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin-left: 39%;
            width: 300px;
        }
        header {
            background-color: black;
            text-align: center;
            padding: 1rem;
            color: #fff;
        }
        footer {
            background-color: white;
            color: black;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header class="container mt-4">
        <h1 class="display-4">CREATE A PROJECT</h1>
    </header>

    <form method="post" action="{{ route('projets.store') }}">
        @csrf
        @method('post')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom">
            @error('nom')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" maxlength="255"></textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="budget" class="form-label">Budget</label>
            <input type="number" class="form-control @error('budget') is-invalid @enderror" name="budget">
            @error('budget')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date_debut" class="form-label">Date-debut</label>
            <input type="date" class="form-control @error('date_debut') is-invalid @enderror" name="date_debut">
            @error('date_debut')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fin" class="form-label">Date-fin</label>
            <input type="date" class="form-control @error('date_fin') is-invalid @enderror" name="date_fin">
            @error('date_fin')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <input type="number" class="form-control @error('statut') is-invalid @enderror" name="statut">
            @error('statut')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" class="btn btn-sm btn-outline-success" value="Save a new Project">
      </form>

    <footer class="container text-center">
        <p>&copy; 2023. All rights reserved.</p>
    </footer>
</body>
</html>
