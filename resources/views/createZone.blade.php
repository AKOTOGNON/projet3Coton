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

        <form action="{{ route('zone.store') }}" method='POST'>
         @csrf
        <div class="mb-3">
      <label for="nom" class="form-label">nom</label>
      <input type="text" id="nom" class="form-control"   name="nom" >
       {!! $errors->first('nom','<span class="error">:message</span>') !!}
    </div>
    <br>
     <div class="mb-3">
      <label for="departement" class="form-label">departement</label>
      <input type="text" id="departement" class="form-control" name="departement" >
      {!! $errors->first('departement','<span class="error">:message</span>') !!}
    </div>
    <br>
     <div class="mb-3">
      <label for="commune" class="form-label">commune</label>
      <input type="text" id="commune" class="form-control" name="commune" >
      {!! $errors->first('commune','<span class="error">:message</span>') !!}
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
