<h3 class="text-center text-4xl tracking-tight font-extrabold text-gray-900 underline whitespace-nowrap mt-28">
  LET'S RENT</h3>
<div class="flex flex-col min-h-fit items-center justify-between mt-4 mb-10">
  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
    @foreach ($kostum as $item)
      <div
        class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
        <img
          class="h-auto w-auto max-h-96 max-w-72 object-contain transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
          src="{{ asset('storage/' .$item->kategori->slug. '/' .$item->slug. '.jpg') }}" alt="..." />
        <div
          class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
        </div>
        <div
          class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
          <h1 class="text-3xl font-bold text-white">{{ $item->nama_kostum }}</h1>
          @php
            $harga_sewa_tambah = $item->harga_sewa + 20000;
          @endphp
          <div class="mb-10">
            <del class="text-red-700 text-lg">Rp {{ substr(number_format($harga_sewa_tambah), 0, -4) }}k</del>
            <h2 class="text-2xl text-white">Rp {{ substr(number_format($item->harga_sewa), 0, -4) }}k</h1>
          </div>
          <a href="/rent/{{ $item->slug }}">
            <button
              class="rounded-full bg-neutral-900 px-3.5 py-2 text-sm capitalize text-white shadow shadow-black/60 mb-4">
              Go to Rent
            </button>
          </a>
          <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
            {{ $item->deskripsi }}
          </p>
        </div>
      </div>
    @endforeach
  </div>
</div>
