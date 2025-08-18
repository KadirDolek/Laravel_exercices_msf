<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>
            <h2>Liste des élèves</h2>

            @foreach($eleves as $ppl)
                <p>{{ $ppl->nom }} {{ $ppl->prenom }}</p>
                <p>{{ $ppl->etat }}</p>
            @endforeach
        </div>

</body>
</html>