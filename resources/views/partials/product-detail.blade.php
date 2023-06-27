<!-- component -->
<section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="Gambar Kostum" class="lg:w-1/2 w-full h-3/4 object-cover object-center rounded border border-gray-200"
        src="{{ asset('storage/' . $kostum->kategori->slug . '/' . $kostum->slug . '.jpg') }}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">COSTUME NAME</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-5">{{ $kostum->nama_kostum }}</h1>
        <p class="leading-relaxed">{{ $kostum->deskripsi }}</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
          <div class="flex items-center">
            <span class="mr-3 font-medium">Kategori</span>
            <div class="relative">
              <div
                class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base px-2">
                {{ $kostum->kategori->nama_kategori }}
              </div>
            </div>
            <span class="ml-3 mr-3 font-medium">Stok</span>
            <div class="relative">
              <div
                class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base px-2">
                {{ $kostum->stok }}
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          @php
            $harga_sewa_tambah = $kostum->harga_sewa + 20000;
          @endphp
          <del class="text-red-700 title-font text-2xl">Rp. {{ substr(number_format($harga_sewa_tambah), 0, -4) }}k</del>
          <span class="title-font font-medium text-2xl text-gray-900 ml-2">Rp.
            {{ substr(number_format($kostum->harga_sewa), 0, -4) }}k</span>
          <a href="{{ auth()->check() ? 'javascript:void(0)' : '/login' }}"
            class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded"
            @if (auth()->check()) data-modal-target="staticModal" data-modal-toggle="staticModal" @endif>
            <button>Rent</button>
          </a>
          @if (auth()->check())
            @include('partials.popup-rent')
          @endif
          <a href="javascript:history.back()">
            <button
              class=" py-2 px-6 focus:outline-none hover:bg-gray-300 rounded bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">Back</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  var selectElement = document.getElementById('jumlah');
  var popup = document.getElementById('popup');
  var jumlahText = document.getElementById('jumlah-text');

  selectElement.addEventListener('change', function() {
    var jumlah = selectElement.value;
    jumlahText.textContent = 'Jumlah : ' + jumlah;
    popup.style.display = 'block';
  });
</script>

