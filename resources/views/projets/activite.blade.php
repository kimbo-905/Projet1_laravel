<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        h1{color: white;margin-top: 50px;}
        header{background-color: black;}
        footer
        {background-color: white;color: black;padding: 20px 0;position: fixed;bottom: 0;}
    </style>
</head>
<body>
    <header class="container mt-4">
        <h1 class="display-4">LISTES DES ACTIVITES</h1>
    </header>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">libelle</th>
            <th scope="col">budget</th>
            <th scope="col">date</th>
            <th scope="col">rapport</th>
            <th scope="col">status</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($nos_activites as $activite)
            <tr>
                <th scope="row">{{ $activite->id }}</th>
                <td>{{ $activite->libelle }}</td>
                <td>{{ $activite->budget }}</td>
                <td>{{ $activite->date }}</td>
                <td>{{ $activite->rapport }}</td>
                <td>{{ $activite->statut }}</td>
                <td>
                    <a href="{{route('activite.edit', ['activite' => $activite])}}" class="btn btn-sm  btn-outline-info ">Modifier</a>
                </td>
                <td>
                    <form method="post" action="{{ route('activite.delete', ['activite' => $activite]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-sm  btn-outline-danger" value="Supprimer">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    <a class="btn btn-sm btn-outline-success" href=" {{route('activite.create')}}" role="button">Nouvelle Activite</a>
      <footer class="container text-center">
        <p>&copy; 2023. All rights reserved.</p>
    </footer>
</body>
</html>
