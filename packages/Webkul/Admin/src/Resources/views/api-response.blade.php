<x-admin::layouts>

    <p class = "py-3 text-xl font-bold text-gray-800 dark:text-white">PageSpeed Insights</p>
    <div class = "mt-4">
        <form action="{{ route('admin.api-response') }}" method="GET">
            <input type="text" placeholder="Enter URL" class = "w-1/3 peer rounded-lg border bg-white px-5 py-1.5 leading-6 text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400 dark:focus:border-gray-400" id="url" name="url">
            <button type="submit" class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg ml-2">Submit</button>
        </form>

        <div>
            @if($response)
                <div>{{ json_encode($response,JSON_PRETTY_PRINT) }}</div>
            @endif
        </div>
    </div>
</x-admin::layouts>
