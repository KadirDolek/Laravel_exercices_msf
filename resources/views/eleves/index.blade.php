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
    <nav class="flex justify-center gap-x-6 font-bold text-blue-900 bg-gradient-to-r from-gray-300 to-gray-400 p-5 shadow-lg">
        <a href="/batiment" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30  bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">Notre bâtiment</a>
        <a href="/eleves" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30  bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">Nos élèves</a>
        <a href="/formation" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30  bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">Formations</a>
        <a href="/typeformation" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30 bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">Types de formation</a>
    </nav>
    <div class="container mx-auto mt-8">
        <div class="flex">
            <h2
                class="text-2xl font-bold mb-4 bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">
                Liste des élèves
            </h2>
            <!-- MODAL BOUTON -->
            <button 
                onclick="document.getElementById('modal').classList.remove('hidden')"
                class="text-2xl font-bold mb-4 flex ml-auto cursor-pointer rounded-2xl border px-4 bg-gradient-to-r from-red-400 to-purple-600 bg-clip-text text-transparent">
                + Ajouter
            </button>
        </div>

        <!-- DBUT MODAL-->
        <div id="modal" class="fixed inset-0 bg-gradient-to-l from-blue-400 to-gray-200 bg-opacity-80 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                <div class="flex justify-between items-center border-b px-4 py-2">
                    <h5 class="text-lg font-bold">Ajout d'un élève</h5>
                    <button onclick="document.getElementById('modal').classList.add('hidden')"
                        class="text-gray-500 hover:text-red-500 text-2xl">&times;</button>
                </div>
                <div class="p-4">
                    <form id="ajoutEleveForm" action="{{ route('eleves.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="block font-semibold">Nom:</label>
                            <input type="text" class="w-full border rounded px-2 py-1" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="block font-semibold">Prénom:</label>
                            <input type="text" class="w-full border rounded px-2 py-1" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="block font-semibold">Age:</label>
                            <input type="number" class="w-full border rounded px-2 py-1" name='age' required>
                        </div>
                        <div class="mb-3">
                            <label for="etat" class="block font-semibold">Etat:</label>
                            <select name="etat" class="w-full border rounded px-2 py-1" required>
                                <option value="1">en ligne</option>
                                <option value="0">hors ligne</option>
                            </select>
                        </div>
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="submit" class="bg-green-700 px-6 py-2 text-white rounded">Ajouter
                                l'élève</button>
                            <button type="button" onclick="document.getElementById('modal').classList.add('hidden')"
                                class="bg-red-700 px-6 py-2 text-white rounded">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- FIN MODAL --}}

        <table class="min-w-full bg-gray-200 rounded shadow-2xl">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">Nom</th>
                    <th class="py-2 px-4 border-b bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">Prénom</th>
                    <th class="py-2 px-4 border-b bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">Âge</th>
                    <th class="py-2 px-4 border-b bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">État</th>
                    <th class="py-2 px-4 border-b bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleves as $ppl)
                    <tr class="text-center bg-gradient-to-r from-gray-100 to-gray-200">
                        <td class="py-2 px-4 border-b border-r font-bold">{{ $ppl->nom }}</td>
                        <td class="py-2 px-4 border-b border-r font-bold">{{ $ppl->prenom }}</td>
                        <td class="py-2 px-4 border-b border-r font-bold">{{ $ppl->age }} ans</td>
                        <td class="py-2 px-4 border-b border-r font-bold">
                            {{ $ppl->etat ? 'en ligne' : 'hors ligne' }}
                        </td>
                        <td class="py-2 px-4 border-b border-r font-bold flex flex-row justify-evenly">
                            <form action="{{ route('remove_eleves', $ppl->id) }}" method="POST">
                            @csrf
                            @method('DELETE') 
                            <input class="bg-gradient-to-r from-red-700 to-black bg-clip-text text-transparent cursor-pointer" type="submit" value="Supprimer">
                            </form>
                            <button><a class="bg-gradient-to-r from-black to-green-600 bg-clip-text text-transparent font-bold" href="{{ route('showEleve', $ppl->id) }}">Voir</a></button>
                            <button><a class="bg-gradient-to-r from-yellow-400 to-black bg-clip-text text-transparent font-bold" href="{{ route('editEleve', $ppl->id) }}">Edit</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>