<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead class="table-primary">
          <tr>
            <th scope="col">quantité engrais</th>
            <th scope="col">quantité semence</th>
            <th scope="col">quantité urée</th>
            <th scope="col">quantité insecticide</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($stocks as $stok)

                <tr>

                    <th>{{ $stok->quantite_engrais }}</th>
                    <td>{{ $stokt->quantite_semence<}}</td>
                    <td>{{ $stok->quantite_uree }}</td>
                    <td>{{ $stok->quantite_insecticide }}</td>


                    <td>
                <a href="{{ route('stock.edit', $stok->id) }}" class="edit">

                            <button style="background: blue">Modifier</button>
                        </a>

                        <form action="{{ route('stock.destroy', $stok->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: red;">Supprimer</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
