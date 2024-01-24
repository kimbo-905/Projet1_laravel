<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{text-align: center;}
        h1{color: white;margin-top: 50px;}
        header{background-color: black;}
        footer
        {background-color: white;color: black;padding: 20px 0;position: fixed;bottom: 0;}
    </style>
</head>
<body>
    <header class="container mt-4">
        <h1 class="display-4">LISTES DES PROJETS</h1>
    </header>
<div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
</div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">code</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
              <th scope="col">budget</th>
              <th scope="col">date_debut</th>
              <th scope="col">date_fin</th>
              <th scope="col">statut</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($nos_projets as $projet)
            <tr>
                <th scope="row">{{ $projet->id }}</th>
                <td>{{ $projet->code }}</td>
                <td>{{ $projet->nom }}</td>
                <td>{{ $projet->description }}</td>
                <td>{{ $projet->budget }}</td>
                <td>{{ $projet->date_debut }}</td>
                <td>{{ $projet->date_fin }}</td>
                <td>{{ $projet->statut }}</td>
                <td>
                    <a href="{{route('projets.edit', ['projet' => $projet])}}" class="btn btn-sm  btn-outline-info ">Modifier</a>
                </td>
                <td>
                    <form method="post" action="{{ route('projets.delete', ['projet' => $projet]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-sm  btn-outline-danger" value="Supprimer">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    <a class="btn btn-sm btn-outline-success" href=" {{ route('projets.create')}}" role="button">Nouveau Project</a>
    <footer class="container text-center">
        <p>&copy; 2023. All rights reserved.</p>
    </footer>
</body>
</html>
