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
        <a href="/batiment" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30">Notre bâtiment</a>
        <a href="/eleves" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30">Nos élèves</a>
        <a href="/formation" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30">Formations</a>
        <a href="/typeformation" class="hover:text-blue-700 hover:scale-105 transition-all duration-300 px-3 py-2 rounded-lg hover:bg-white/30">Types de formation</a>
    </nav>
</body>
</html>