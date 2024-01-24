<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="container mt-4">
        <h1 class="display-4">LISTES</h1>
    </header>
    <ul>
        <li><a href="http://127.0.0.1:8000/liste-projets">PROJETS</a></li>
        <li><a href="{{ route('zones.index') }}">ZONES</a></li>
        <li><a href="http://127.0.0.1:8000/liste-activites">ACTIVITE</a></li>
    </ul>
</body>
</html>
