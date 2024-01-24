<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Create an Activity</title>
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
    <h1 class="display-4">CREATE AN ACTIVITY</h1>
</header>
<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>
<form method="post" action="{{ route('activite.store') }}">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" class="form-control" name="libelle">
    </div>
    <div class="mb-3">
        <label for="budget" class="form-label">Budget</label>
        <input type="number" class="form-control" name="budget">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" name="date">
    </div>
    <div class="mb-3">
        <label for="rapport" class="form-label">Rapport</label>
        <input type="text" class="form-control" name="rapport">
    </div>
    <div class="mb-3">
        <label for="statut" class="form-label">Statut</label>
        <input type="number" class="form-control" name="statut">
    </div>
    <input type="submit" class="btn btn-sm btn-outline-success" value="Save a new Activity">
</form>

<footer class="container text-center">
    <p>&copy; 2023. All rights reserved.</p>
</footer>
</body>
</html>
