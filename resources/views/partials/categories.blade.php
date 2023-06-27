<!-- Categories Section -->
  <h3 class="text-center text-4xl tracking-tight font-extrabold text-gray-900 underline whitespace-nowrap mt-20">
    CATEGORIES</h3>
  <div class="flex flex-col min-h-fit items-center justify-between mt-10 mb-10">
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
      @foreach ($kategori as $item)
        <div
          class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
          <div class="h-96 w-72">
            <img
              class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
              src="storage/categories/{{ $item->slug }}-cosplay.jpg" alt="..." />
          </div>
          <div
            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
          </div>
          <div
            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
            <h1 class="text-3xl font-bold text-white">{{ $item->nama_kategori }}</h1>
            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
              {{ $item->deskripsi }}
            </p>
            <a href="/category/{{ $item->slug }}">
              <button
                class="rounded-full bg-neutral-900 px-3.5 py-2 text-sm capitalize text-white shadow shadow-black/60">
                See More
              </button>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
