<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>HyPixel Bazaar API</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
    <!-- Styles -->
    <body>
        <div class="flex flex-col justify-center items-center min-h-screen w-full">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Duration</th>
                        <th scope="col" class="px-6 py-3">Crafding Tree</th>
                        <th scope="col" class="px-6 py-3">Component Buy Price</th>
                        <th scope="col" class="px-6 py-3">Item Sell Price</th>
                        <th scope="col" class="px-6 py-3">Margin</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($items as $itemData)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium {{$itemData['item']->rarity}} whitespace-nowrap dark:text-white">{{$itemData['item']->name}}</th>
                    <td class="px-6 py-4">{{ $itemData['item']->duration }}</td>
                    <td class="px-6 py-4">
                        <ul>
                            @foreach($itemData['item']->craftingItems as $craftingItem)
                            <li class={{$craftingItem->rarity}}>{{ $craftingItem->pivot->quantity }}x {{$craftingItem->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="px-6 py-4">{{ number_format($itemData['totalBuyPrice'], 2, ',', '.') }}</td>
                    <td class="px-6 py-4">{{ number_format($itemData['sellPrice'], 2, ',', '.') }}</td>
                    <td class="px-6 py-4 font-bold {{ $itemData['margin'] < 0 ? 'negative' : 'positive' }}">{{ number_format($itemData['margin'], 2, ',', '.') }}
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-center"> <!-- Centering the pagination -->
            {{ $items->links('vendor.pagination.custom') }}
        </div>
    </div>
    <script>
        // Log the apiData to the console
        const apiData = @json($apiData);
        console.log(apiData);
    
    </script>
    </body>
</html>
