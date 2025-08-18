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
    <nav class="flex justify-center gap-x-6 font-bold text-blue-900 bg-gradient-to-r from-gray-200 to-gray-300 p-5">
        <a href="/batiment">Notre batiment</a>
        <a href="/eleves">Nos élèves</a>
        <a href="/formation">Formations</a>
        <a href="/typeformation">Types de formation</a>
    </nav>
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Liste des élèves</h2>
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Prénom</th>
                    <th class="py-2 px-4 border-b">Âge</th>
                    <th class="py-2 px-4 border-b">État</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleves as $ppl)
                    <tr class="text-center bg-gradient-to-r from-gray-100 to-gray-200">
                        <td class="py-2 px-4 border-b border-r">{{ $ppl->nom }}</td>
                        <td class="py-2 px-4 border-b border-r">{{ $ppl->prenom }}</td>
                        <td class="py-2 px-4 border-b border-r">{{ $ppl->age }} ans</td>
                        <td class="py-2 px-4 border-b border-r">
                            {{ $ppl->etat ? 'en ligne' : 'hors ligne' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>