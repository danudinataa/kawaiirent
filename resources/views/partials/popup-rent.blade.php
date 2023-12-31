<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Confirm Your Costume Rental
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="staticModal">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6">
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          Nama : {{ auth()->user()->name }}
        </p>
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          ID Kostum : {{ $kostum->id }}
        </p>
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          Kostum : {{ $kostum->nama_kostum }}
        </p>
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          Total Harga : Rp. {{ $kostum->harga_sewa }}
        </p>
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          Tanggal Sewa : {{ now()->format('d F Y') }}
        </p>
        <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
          Tanggal Pengembalian : {{ now()->addDays(4)->format('d F Y') }}
        </p>
      </div>
      <!-- Modal footer -->
      <form action="{{ route('rent-confirm', ['kostum' => $kostum]) }}" method="POST">
        @csrf
        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
        <input type="hidden" name="id_kostum" value="{{ $kostum->id }}">
        <input type="hidden" name="total_harga" value="{{ $kostum->harga_sewa }}">

        <input type="hidden" name="tanggal_sewa" value="{{ now() }}">
        <input type="hidden" name="tanggal_pengembalian" value="{{ now()->addDays(4) }}">
        <div class="p-6">
          <input type="text" name="catatan" class="text-lg leading-relaxed text-gray-500 dark:text-gray-400">
        </div>
        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button data-modal-hide="staticModal" type="submit" id="confirmButton"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm</button>
          <button data-modal-hide="staticModal" type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
        </div>
      </form>
    </div>
  </div>
</div>
