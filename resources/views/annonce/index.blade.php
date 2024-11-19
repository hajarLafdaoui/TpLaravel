<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List des annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h1>List des annonces</h1>
    <button class="btn btn-primary">Nouvelle annonce</button>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            <th scope="col">Ville</th>
            <th scope="col">Superficie(m²)</th>
            <th scope="col">Etat</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->titre}}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->ville }}</td>
                    <td>{{ $item->superficie }}</td>
                    <td>{{ $item->etat }}</td>
                    <td>{{ $item->prix }}</td>
                    <td> 
                        <a href="{{ route('annonce.show', $item->id) }}" class="btn btn
                            -primary">show</a>

                            
                        <a href="{{ route('annonce.edit', $item->id) }}" class="btn btn
                            -primary">Modifier</a>


                        <form action="{{ route('annonce.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                            
                    </td>

                </tr>
                @endforeach
            
         
        </tbody>
      </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>