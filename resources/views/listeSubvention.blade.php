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
            <th scope="col">nombre hectare </th>
            <th scope="col">montant a payé</th>
            <th scope="col">montant vendu</th>
            <th scope="col">date de vente</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($sbventions as $sbvent)

                <tr>

                    <th>{{ $sbvent->quantite_engrais }}</th>
                    <td>{{ $sbvent->quantite_semence<}}</td>
                    <td>{{ $sbvent->quantite_uree }}</td>
                    <td>{{ $sbvent->quantite_insecticide }}</td>
                    <td>{{ $sbvent->nbr_hectare }}</td>
                    <td>{{ $sbvent->montant_du}}</td>
                    <td>{{ $sbvent->montant_restant }}</td>
                    <td>{{ $sbvent->montant_vendu}}</td>
                    <td>{{ $sbvent->date_vente }}</td>


                    <td>
                <a href="{{ route('sbvention.edit', $sbvent->id) }}" class="edit">

                            <button style="background: blue">Modifier</button>
                        </a>

                        <form action="{{ route('subvention.destroy', $sbvent->id) }}" method="POST" style="display: inline-block;">
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
