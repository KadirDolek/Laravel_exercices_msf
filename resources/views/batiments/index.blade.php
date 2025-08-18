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
        <h2>Le batiment</h2>
        <span>
            @foreach($batiments as $batiment)
                <p>{{ $batiment->nom }}</p>
                <p>{{ $batiment->description }}</p>
            @endforeach
        </span>
    </div>
</body>
</html>