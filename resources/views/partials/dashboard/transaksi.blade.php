<table class="min-w-full">
    <thead>
        <tr>
            <th
            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            User</th>
            <th
            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Costume</th>
            <th
            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Sewa</th>
            <th
            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Pengembalian</th>
            <th
            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
            Catatan</th>
        </tr>
    </thead>
    
    <tbody class="bg-white">
        @foreach ($detailTransaksi as $item)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Avatar" />
                    </div>
                    
                    <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $item->transaksi->user->name }}</div>
                        <div class="text-sm leading-5 text-gray-500">{{ $item->transaksi->user->email }}</div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->transaksi->kostum->nama_kostum }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->tanggal_sewa }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->tanggal_pengembalian }}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->catatan }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
