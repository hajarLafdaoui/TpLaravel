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
   <div class="container">
    <h1>Nouvelle annonce</h1>

    <form action="/annonce" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Type</label>
            <select class="form-select" aria-label="Default select example" name='type'>
                
                <option selected>Appartement </option>
                <option value="Maison">Maison</option>
                <option value="Villa">Villa</option>
                <option value="Magasin">Magasin</option>
                <option value="Terrain">Terrain</option>
            </select>
    
        </div>
       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ville</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ville">
        </div>

        <div class="mb-3">
            <label for="superficie" class="form-label">superficie</label>
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar) " name="superficie">
            <span class="input-group-text">m²</span>
            </div>
            
        </div>

        <div class="mb-3">

            <label for="Etat" class="form-label">Etat</label>
            {{-- <div class="form-check">
                <input class="form-check-input" type="numbrer" name="neuf" value="neuf" checked>
                <label class="form-check-label" for="flexRadioDefault2">Neuf</label>
            </div> --}}
            <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="flexRadioDefault2" value="1" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Neuf
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="etat" id="flexRadioDefault1" value="0">
                <label class="form-check-label" for="flexRadioDefault1">
                  Ancien
                </label>
            </div>
            

        <div class="mb-3">
            <label for="prix" class="form-label">prix</label>
            <div class="input-group">
                <input type="text" class="form-control" id="prix" aria-label="Amount (to the nearest dollar) " name="prix">
                <span class="input-group-text">dhs</span>
            </div>
        </div>
        <button class="btn btn-primary">Ajouter</button>
    </form>
   </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>