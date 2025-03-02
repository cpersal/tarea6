<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas de Star Wars</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function redirectToCharacters() {
            const selectedId = document.getElementById('starWar').value;
            if (selectedId) {
                window.location.href = "{{ route('starWars.characters', ['id' => '']) }}/" + selectedId;
            }
        }
    </script>
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Películas de Star Wars</h1>
    <form onsubmit="event.preventDefault(); redirectToCharacters();" class="space-y-4">
        <div>
            <label for="starWar" class="block text-lg font-semibold text-gray-700 mb-2">Selecciona una película:</label>
            <select name="id" id="starWar"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @foreach ($starWars as $starWar)
                    <option value="{{ $starWar['episode_id'] }}">{{ $starWar['title'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit"
                    class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                Ver Personajes
            </button>
        </div>
    </form>
</div>
</body>
</html>
