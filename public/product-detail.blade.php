<!-- component -->
<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
        src="{{storage/{{ $kostum->kategori->slug }}/{{ $kostum->slug }}.jpg}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-5">{{ $kostum->nama_kostum }}</h1>
        <p class="leading-relaxed">{{ $kostum->deskripsi }}</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select
                class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <span
                class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
            <span class="ml-3 mr-3">Jumlah</span>
            <div class="relative">
              <select
                class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                @php
                  $sisa_stok = $kostum->stok;
                @endphp
                @for ($i = 1; $i <= $sisa_stok; $i++)
                  <option>{{ $i }}</option>
                @endfor
              </select>
            </div>
          </div>
        </div>
        <div class="flex">
          @php
            $harga_sewa_tambah = $kostum->harga_sewa + 20000;
          @endphp
          <del class="text-red-700 title-font text-2xl">Rp {{ substr(number_format($harga_sewa_tambah), 0, -4) }}k</del>
          <span class="title-font font-medium text-2xl text-gray-900 ml-2">Rp
            {{ substr(number_format($kostum->harga_sewa), 0, -4) }}k</span>
          <button
            class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Rent</button>
          <button
            class=" py-2 px-6 focus:outline-none hover:bg-gray-600 rounded bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">Back</button>
        </div>
      </div>
    </div>
  </div>
</section>
