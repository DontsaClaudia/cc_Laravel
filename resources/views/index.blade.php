
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1>liste des participants</h1>
  @if ($liste_c->count() > 0)
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Ville</th>
        <th>Telephone</th>
        <th>Action</th>
    </tr>
    <tbody>
        @foreach ($liste_c as $p )
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nom}}</td>
                <td>{{$p->ville}}</td>
                <td>{{$p->telephone}}</td>

                <!--<td>

                     @method('DELETE')
                     <a href="/participant_delete/{{$p->id}}" class="btn btn-outline-danger">Supprimer</a>

                    @method('EDIT')
                   <a href="/form_update_participant/{{$p->id}}" class="btn btn-outline-success">Editer</a></td>-->
            </tr>
        @endforeach
    </tbody>
</table>
  @endif
</body>
</html>
