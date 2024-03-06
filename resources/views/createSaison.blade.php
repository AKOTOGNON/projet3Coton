<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Project Laravel</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
  </head>
  <style>
    .error{
        color: red;
    }
  </style>
  <body>
    <h1>AJOUTER UN PRODUIT</h1>
     <div class="container ">
  <div class="row">

    <div class="col s12">

        <form action="{{ route('saison.store') }}" method='POST'>
         @csrf
        <div class="mb-3">
      <label for="date_debut" class="form-label">date de debut</label>
      <input type="date" id="date_debut" class="form-control"   name="date_debut" >
       {!! $errors->first('date_debut','<span class="error">:message</span>') !!}
    </div>
    <div class="mb-3">
      <label for="date_fin" class="form-label">date de fin</label>
      <input type="text" id="prenom" class="form-control" name="date_fin" >
      {!! $errors->first('date_fin','<span class="error">:message</span>') !!}

    </div>
    <br>
    <button type="submit" class="btn btn-primary">valider</button>
    <br><br>
</form>

    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
