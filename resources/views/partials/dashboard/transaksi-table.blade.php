<h3 class="text-gray-700 text-3xl font-medium">TRANSAKSI TABLE</h3>
    <div class="mt-4"> 
        <div class="mt-6">
            <div class="bg-white shadow rounded-md overflow-hidden my-6">
                <table class="text-left w-full border-collapse">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">ID</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">ID USER</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">USER</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">ID KOSTUM</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">KOSTUM</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">TOTAL HARGA</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">CREATED AT</th>
                            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">UPDATED AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)  
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ $item->id }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->id_user }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->user->name }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->id_kostum }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->kostum->nama_kostum }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->total_harga }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->created_at }}</td>
                            <td class="py-4 px-6 border-b text-gray-500">{{ $item->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>