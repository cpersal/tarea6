<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de {{ $starWar['title'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Personajes de {{ $starWar['title'] }}</h1>
    <ul class="space-y-4">
        @foreach ($characters as $character)
            <li class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <div class="space-y-2">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $character['name'] }}</h2>
                    <p class="text-gray-600"><strong>Género:</strong> {{ $character['gender'] }}</p>
                    <p class="text-gray-600"><strong>Año de nacimiento:</strong> {{ $character['birth_year'] }}</p>
                    @if (count($character['vehicles']) > 0)
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-gray-700">Vehículos:</h3>
                            <ul class="list-disc list-inside pl-4">
                                @foreach ($character['vehicles'] as $vehicleUrl)
                                    @php
                                        $vehicleId = basename($vehicleUrl);
                                    @endphp
                                    <li class="text-blue-600 hover:text-blue-800">
                                        <a href="{{ route('vehicles.show', $vehicleId) }}">Ver
                                            Vehículo {{ $vehicleId }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <p class="text-gray-600">Este personaje no tiene vehículos.</p>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
    <div class="mt-6 text-center">
        <a href="{{ url()->previous() }}"
           class="inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
            Volver atrás
        </a>
    </div>
</div>
</body>
</html>
