<h3 class="text-gray-700 text-3xl font-semibold">Add Kategori</h3>

<div class="mt-8 mb-10">
  <div class="mt-4">
    <div class="p-6 bg-white rounded-md shadow-md">
      @if (session('successKategori'))
        <div id="toast-message-cta" class="fixed inset-0 flex items-center justify-center">
          <div
            class="w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 flex items-center justify-center"
            role="alert">
            <div class="flex">
              <div class="ml-3 text-sm font-normal">
                <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                  <path fill="currentColor"
                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                  </path>
                </svg>
                <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Berhasil!</span>
                <div class="mb-2 text-sm font-normal">{{ session('successKategori') }}</div>
              </div>
              <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-message-cta" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      @endif
      
      <h2 class="text-lg text-gray-700 font-semibold capitalize">New Categories</h2>
      <form action="{{ route('store-kategori') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
          <div>
            <label class="text-gray-700" for="kategori">Nama Kategori</label>
            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="namaKategori">
          </div>

          <div>
            <label class="text-gray-700" for="slug">Slug</label>
            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="slug">
          </div>

          <div>
            <label class="text-gray-700" for="deskripsi">Deskripsi</label>
            <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="deskripsi">
          </div>
        </div>

        <div class="flex justify-end mt-4">
          <button
            class="px-4 py-2 bg-indigo-400 text-gray-200 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-gray-700"
            type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
