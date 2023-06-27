<!-- Best Rent Section -->
<section class="bg-white mt-20 dark:bg-gray-900">
  <div class="gap-4 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
    <!-- Carousel -->
    <div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-full overflow-hidden">

        @foreach ($kategori as $kategori_item)
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="flex">
              @foreach ($best_kostum->where('id_kategori', $kategori_item->id) as $best_item)
                <section class="mx-auto w-full md:w-fit px-4">
                  <!-- Card -->
                  <div class="w-auto h-36 group">
                    <div class="relative overflow-hidden">
                      <img class="h-fit w-full object-cover"
                        src="storage/{{ $kategori_item->slug }}/{{ $best_item->slug }}.jpg" alt="..." />
                      <div
                        class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <a href="/rent/{{ $best_item->slug }}"><button class="bg-black text-white py-2 px-5">
                            Go to Rent
                          </button>
                        </a>
                      </div>
                    </div>
                    <h2 class="mt-3 text-xl capitalize">{{ $best_item->nama_kostum }}</h2>
                    {{-- Nambah Harga --}}
                    @php
                      $harga_sewa_tambah = $best_item->harga_sewa + 20000;
                    @endphp
                    <del class="text-red-700 text-lg">Rp. {{ substr(number_format($harga_sewa_tambah), 0, -4) }}k</del>

                    <p class="text-xl mt-2 ml-1 inline-block">Rp.
                      {{ substr(number_format($best_item->harga_sewa), 0, -4) }}k</p>
                  </div>
                </section>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="mt-4 md:mt-0">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
        Let's Rent Our Best to Cosplay
      </h2>
      <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque qui
        exercitationem aliquid ratione, doloremque ut eaque sunt? Ipsum,
        perferendis eum.
      </p>
      <button type="button"
        class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="/rent"
          class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-lg px-3 py-0.5 text-center dark:focus:ring-primary-900">
          Lets Rent
          <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </button>
    </div>
  </div>
</section>
