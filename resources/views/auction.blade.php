<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>HyPixel Auction Data</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="flex flex-col justify-center items-center w-full min-h-screen gap-10">
        <form class="max-w-md mx-auto w-full">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items" required style="outline: none;" />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <div class="flex flex-col gap-5 justify-center items-center">
            <h1 class="text-neutral-900 font-semibold text-lg">Items with most bids</h1>
            <div class="grid grid-rows-4 grid-cols-4 justify-start items-center gap-4">
                @foreach($auctionData as $auction)
                <div class="bg-white border shadow-md rounded-lg p-4">
                    <h2 class="text-lg font-bold {{$auction['tier']}}">{{$auction['item_name']}}</h2>
                    <p class="text-gray-500 time-remaining">Time remaining: <span id="time-remaining-{{$auction['uuid']}}"></span></p>
                    <p class="text-gray-500">Highest Bid: {{number_format($auction['highest_bid_amount'],2,',','.')}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        const auctionData = @json($auctionData);
    </script>
    <script src="{{ asset('js/clock.js') }}"></script>
</body>
</html>
