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
        <div class="max-w-5xl mx-auto px-6 py-12">
        <h2 class="text-4xl font-bold text-center mb-12 bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">
            Le type de formation disponibles:
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($typeformation as $zzz)
                <div class="group bg-white/70 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50 hover:border-red-200">
                    
                    <!-- Effet de gradient au hover -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-400/10 to-purple-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent group-hover:from-red-600 group-hover:to-purple-700 transition-all duration-300">
                            {{ $zzz->nom }}
                        </h3>
                        
                        <p class="text-gray-700 leading-relaxed group-hover:text-gray-800 transition-colors duration-300">
                            {{ $zzz->description }}
                        </p>
                        
                        <!-- Ligne décorative -->
                        <div class="mt-4 w-full h-0.5 bg-gradient-to-r from-red-300 to-purple-400 rounded-full group-hover:h-1 transition-all duration-300"></div>
                    </div>
                    
                    <!-- Icône décorative -->
                    <div class="absolute top-4 right-4 w-6 h-6 bg-gradient-to-br from-red-400 to-purple-500 rounded-full opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                </div>
            @endforeach
        </div>
        
        <!-- Section décorative -->
        <div class="mt-16 text-center">
            <div class="inline-flex items-center gap-2">
                <div class="w-8 h-0.5 bg-gradient-to-r from-transparent to-red-500"></div>
                <span class="text-sm font-medium bg-gradient-to-r from-red-500 to-purple-600 bg-clip-text text-transparent">
                    Diversité • Qualité • Innovation
                </span>
                <div class="w-8 h-0.5 bg-gradient-to-l from-transparent to-purple-500"></div>
            </div>
        </div>
        
        </div>
</body>
</html>