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
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">numero</th>
            <th scope="col">commune</th>
            <th scope="col">depatement</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($paysans as $paysant)

                <tr>

                    <th>{{ $paysant->nom }}</th>
                    <td>{{ $paysant->prenom }}</td>
                    <td>{{ $paysant->numero }}</td>
                    <th>{{ $paysant->commune }}</th>
                    <td>{{ $paysant->departement }}</td>

                    <td>
                <a href="{{ route('paysan.edit', $paysant->id) }}" class="edit">

                            <button style="background: blue">Modifier</button>
                        </a>

                        <form action="{{ route('paysan.destroy', $paysant->id) }}" method="POST" style="display: inline-block;">
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
