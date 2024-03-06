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

        <form action="{{ route('subvention.store') }}" method='POST'>
         @csrf
        <div class="mb-3">
      <label for="quantite_engrais" class="form-label">quantite engrais</label>
      <input type="text" id="quantite_engrais" class="form-control"   name="quantite_engrais" >
       {!! $errors->first('quantite_engrais','<span class="error">:message</span>') !!}
    </div>
    <div class="mb-3">
      <label for="qunatite_semence" class="form-label">quantité semence</label>
      <input type="text" id="qunatite_semence" class="form-control" name="qunatite_semence" >
      {!! $errors->first('qunatite_semence','<span class="error">:message</span>') !!}

    </div>
    <br>
     <div class="mb-3">
      <label for="qunatite_uree" class="form-label">qunatite urée</label>
      <input type="text" id="qunatite_uree" class="form-control" name="qunatite_uree" >
      {!! $errors->first('qunatite_uree','<span class="error">:message</span>') !!}
    </div>
    <br>
     <div class="mb-3">
      <label for="qunatite_insecticide" class="form-label">qunatite insecticide</label>
      <input type="text" id="qunatite_insecticide" class="form-control" name="qunatite_insecticide" >
      {!! $errors->first('qunatite_insecticide','<span class="error">:message</span>') !!}
    </div>
    <br>
    <div class="mb-3">
      <label for="nbr_hectare" class="form-label">nombre hectare</label>
      <input type="number" id="nbr_hectare" class="form-control" name="nbr_hectare" >
      {!! $errors->first('nbr_hectare','<span class="error">:message</span>') !!}
    </div>

    <br>
     <div class="mb-3">
      <label for="montant_du" class="form-label">montant du</label>
      <input type="text" id="montant_du" class="form-control" name="montant_du" >
      {!! $errors->first('montant_du','<span class="error">:message</span>') !!}
    </div>
    <br>
     <div class="mb-3">
      <label for="montant_vente" class="form-label">montant de la vente</label>
      <input type="text" id="montant_vente" class="form-control" name="montant_vente" >
      {!! $errors->first('montant_vente','<span class="error">:message</span>') !!}
    </div>
    <br>

    <div class="mb-3">
      <label for="montant_restant" class="form-label">montant restant</label>
      <input type="text" id="montant_restant" class="form-control" name="montant_restant" >
      {!! $errors->first('montant_restant','<span class="error">:message</span>') !!}
    </div>
    <br>
    <div class="mb-3">
      <label for="date_vente" class="form-label">montant restant</label>
      <input type="date" id="date_vente" class="form-control" name="date_vente" >
      {!! $errors->first('date_vente','<span class="error">:message</span>') !!}
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
