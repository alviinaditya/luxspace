<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Product &raquo; {{ $product->name }} &raquo; Gallery &raquo; Upload Photos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                <div class="mb-5" role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        There's Something Wrong!
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </p>
                    </div>
                </div>
                @endif
                <form action="{{ route('dashboard.product.gallery.store', $product->id) }}" class="w-full" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap mx-3 mb-6 space-y-4 sm:-mx-3">
                        <div class="w-full px-3">
                            <label for="files"
                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 dark:text-gray-300">Name</label>
                            <input type="file" multiple name="files[]" accept="image/*" id="files"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500
                                    dark:bg-gray-800 dark:border-gray-800 dark:focus:bg-gray-900 dark:focus:border-gray-700 dark:focus:text-gray-200" placeholder="Photos">
                        </div>
                        <div class="w-full px-3">
                            <button type="submit"
                                class="inline-block bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                                Save Gallery
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>