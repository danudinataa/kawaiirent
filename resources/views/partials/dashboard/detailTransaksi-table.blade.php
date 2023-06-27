<h3 class="text-gray-700 text-3xl font-medium">DETAIL TRANSAKSI TABLE</h3>
<div class="mt-4">
  <div class="mt-6">
    <div class="bg-white shadow rounded-md overflow-hidden my-6">
      <table class="text-left w-full border-collapse">
        <thead class="border-b">
          <tr>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">ID</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">ID TRANSAKSI</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">TANGGAL SEWA</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">TANGGAL PENGEMBALIAN</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">DENDA</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">CATATAN</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">CREATED AT</th>
            <th class="py-3 px-5 bg-indigo-800 font-medium uppercase text-sm text-gray-100">UPDATED AT</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($detailTransaksi as $item)
            <tr class="hover:bg-gray-200">
              <td class="py-4 px-6 border-b text-gray-700 text-lg">{{ $item->id }}</td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->id_transaksi }}</td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->tanggal_sewa }}</td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->tanggal_pengembalian }}</td>
              <td class="py-4 px-6 border-b text-gray-500">
                @php
                  $tanggalSewa = strtotime($item->tanggal_sewa);
                  $tanggalPengembalian = strtotime($item->tanggal_pengembalian);
                  $today = strtotime(date('Y-m-d'));
                  $diff = $today - $tanggalPengembalian;
                  $daysLate = floor($diff / (60 * 60 * 24)); // Calculate the number of days late
                  
                  if ($daysLate > 0) {
                      $denda = $daysLate * 10000; // Fine of 10000 per day
                  } else {
                      $denda = 0; // No fine
                  }
                @endphp
                {{ $denda }}
              </td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->catatan }}</td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->created_at }}</td>
              <td class="py-4 px-6 border-b text-gray-500">{{ $item->updated_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
