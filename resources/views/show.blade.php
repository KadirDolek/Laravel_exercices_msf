<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-l from-blue-400 to-gray-200 ">

    <div class="text-center mt-12 font-bold">
        <h1 class="mb-18">Détails élèves</h1>
        <p class="text-red-500">{{ $eleve->nom }} {{ $eleve->prenom }}</p>
        <p class="text-green-700">{{ $eleve->age}}</p>
    </div>
    <div>
        <a class="font-bold bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent flex justify-center" href="/eleves">Retour</a>
    </div>
</body>
</html>