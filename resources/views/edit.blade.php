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
    <div id="modal" class="fixed inset-0 bg-gradient-to-l from-blue-400 to-gray-200 bg-opacity-80 items-center justify-center z-50 ">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md mx-auto mt-12">
                <div class="flex justify-between items-center border-b px-4 py-2">
                    <h5 class="text-lg font-bold">Modif d'un élève</h5>
                    <button onclick="document.getElementById('modal').classList.add('hidden')"
                        class="text-gray-500 hover:text-red-500 text-2xl">&times;</button>
                </div>
                <div class="p-4">
                    <form id="ajoutEleveForm" action="{{ route('update_eleves', $eleve->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="nom" class="block font-semibold">Nom:</label>
                            <input type="text" class="w-full border rounded px-2 py-1" value="{{ old('nom', $eleve->nom) }}" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="block font-semibold">Prénom:</label>
                            <input type="text" class="w-full border rounded px-2 py-1" value="{{ old('nom', $eleve->prenom) }}" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="block font-semibold">Age:</label>
                            <input type="number" value="{{ old('nom', $eleve->age) }}" class="w-full border rounded px-2 py-1" name='age' required>
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
                            <a href="/eleves"
                                class="bg-red-700 px-6 py-2 text-white rounded">Fermer</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>