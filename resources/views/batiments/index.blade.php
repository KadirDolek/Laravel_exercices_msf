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
    <div class="max-w-4xl mx-auto px-6 py-12">
        <h2 class="text-4xl font-bold text-center mb-12 bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">
            Nos bâtiments:
        </h2>
        
        <div class="space-y-8">
            @foreach($batiments as $batiment)
                <div class="bg-white/60 backdrop-blur-sm rounded-lg p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-white/40">
                    <p class="font-semibold text-xl mb-3 text-slate-700 hover:text-transparent hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:bg-clip-text transition-all duration-300 transform cursor-pointer">
                        {{ $batiment->nom }}
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $batiment->description }}
                    </p>
                    <div class="mt-4 w-full h-0.5 bg-gradient-to-r from-blue-300 to-purple-400 rounded-full"></div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>