<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="flex flex-row justify-center my-12">
    {{-- Code afkomstig van https://flowbite.com/docs/components/card/ --}}
    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h1 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">{{ $dish->name }}</h1>
        <p class="mb-3 text-gray-500 dark:text-gray-400">{{ $dish->description }}</p>
        {{-- code afkomstig van https://flowbite.com/docs/typography/paragraphs/ --}}
        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Recept</h2>
        <p class="mb-3 text-gray-500 dark:text-gray-400">{{ $dish->recipe->instructions }}</p>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Ingrediënten</h2>
        <ul class="space-y-1 text-gray-700 list-disc list-inside dark:text-gray-300">
            @foreach($dish->recipe->ingredients as $ingredient)
                <li>
                    {{ $ingredient->name }} - {{ $ingredient->pivot->quantity }} {{ $ingredient->unit }}
                </li>
            @endforeach
        </ul>
    </a>
</div>
<p class="mt-4 text-center">
    <a href="{{ route('dishes.index') }}" class="text-blue-600 hover:underline">Terug naar overzicht</a>
</p>
</body>

</html>
