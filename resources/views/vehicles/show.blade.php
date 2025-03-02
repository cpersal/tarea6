<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Vehículo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Detalles del Vehículo</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <tbody class="divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Nombre</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['name'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Modelo</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['model'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Fabricante</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['manufacturer'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Costo en créditos</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['cost_in_credits'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Longitud</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['length'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Velocidad máxima</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['max_atmosphering_speed'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Tripulación</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['crew'] }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 font-semibold text-gray-700">Pasajeros</td>
                <td class="px-6 py-4 text-gray-600">{{ $vehicle['passengers'] }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-6 text-center">
        <a href="{{ url()->previous() }}"
           class="inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
            Volver atrás
        </a>
    </div>
</div>
</body>
</html>
