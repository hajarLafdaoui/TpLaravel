<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annonce Details</title>
</head>
<body>
    @if (isset($show) && $show)
        <p>Titre: {{$show->titre}}</p>
        <p>Description: {{$show->description}}</p>
        <p>Type: {{$show->type}}</p>
        <p>Ville: {{$show->ville}}</p>
        <p>Superficie (m²): {{$show->superficie}}</p>
        <p>Etat: {{$show->etat}}</p>
        <p>Prix: {{$show->prix}}</p>
    @else
        <p>Annonce not found.</p>
    @endif
</body>
</html>
