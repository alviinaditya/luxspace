<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Transaction &raquo; #{{ $transaction->id . ' ' . $transaction->name }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            //AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    {data: 'id', name: 'id', width: '5%'},
                    {data: 'product.name', name: 'product.name'},
                    {data: 'product.price', name: 'product.price'}
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5 dark:text-gray-200">Transaction Detail
            </h2>
            <div class="shadow overflow-hidden sm:rounded-md mb-5">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="p-6 bg-white border-b border-gray-200"></div>
                </div>
            </div>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5 dark:text-gray-200">Transaction Item</h2>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>