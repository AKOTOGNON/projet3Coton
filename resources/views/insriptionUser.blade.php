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

        <form action="{{ route('paysan.store') }}" method='POST'>
         @csrf
        <div class="mb-3">
      <label for="nom" class="form-label">nom</label>
      <input type="text" id="nom" class="form-control"   name="nom" >
       {!! $errors->first('nom','<span class="error">:message</span>') !!}
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label">prenom</label>
      <input type="text" id="prenom" class="form-control" name="prenom" >
      {!! $errors->first('prenom','<span class="error">:message</span>') !!}

    </div>
     <br>
    <div class="mb-3">
      <label for="numero" class="form-label">numero</label>
      <input type="numero" id="numero" class="form-control" name="numero" >
      {!! $errors->first('numero','<span class="error">:message</span>') !!}
    </div>

    <br>
     <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" id="email" class="form-control" name="email" >
      {!! $errors->first('email','<span class="error">:message</span>') !!}
    </div>
    <br>
     <div class="mb-3">
      <label for="password" class="form-label">password</label>
      <input type="text" id="password" class="form-control" name="password" >
      {!! $errors->first('password','<span class="error">:message</span>') !!}
    </div>

    <br>

    <div class="mb-3">
        <select name="sexe" class="form-control" type="radio">
			<option selected=""> choix de</option>
            <option value="">homme</option>
            <option value="">femme</option>

		</select>
           {!! $errors->first('sexe','<span class="error">:message</span>') !!}
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
