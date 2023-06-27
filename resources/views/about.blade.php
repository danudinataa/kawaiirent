@extends ('layouts.main')

@section('contents')
@include('partials.navbar')

<!-- Main Content -->
<main class="mx-auto px-4 py-8 mt-10">
    <div class="flex items-center">
      <div class="ml-10 w-full md:w-1/2 lg:w-2/5">
        <img
          src="{{ asset('storage/logo/logo-website.png') }}"
          alt="Company Image"
          class="w-96 h-auto rounded-lg shadow-lg" />
      </div>
      <div class="w-full md:w-1/2 lg:w-3/5 pl-8">
        <h1 class="text-3xl font-semibold mt-14 mb-6">
          Kualitas Adalah Prioritas!
        </h1>
        <p class="text-gray-700 mb-6">
          Toko kami sudah ada sejak 2015 dimana Kami adalah destinasi terbaik
          bagi pecinta cosplay yang ingin mewujudkan karakter favorit mereka
          dengan sempurna. Dengan koleksi kostum yang lengkap dan berkualitas
          tinggi, kami menyediakan opsi terbaik untuk menghidupkan fantasi
          Anda. Baik Anda ingin menjadi pahlawan super, karakter anime yang
          ikonik, atau tokoh dalam permainan video terkenal, kami memiliki
          beragam pilihan untuk memenuhi kebutuhan dan imajinasi Anda.
        </p>
        <p class="text-gray-700 mb-6">
          Dapatkan kostum yang detail dan akurat, terbuat dari bahan
          berkualitas dan desain yang mendalam. Kami mengerti betapa
          pentingnya detail dalam cosplay, dan itulah mengapa kami menyediakan
          kostum yang dirancang untuk memastikan Anda tampil menakjubkan dan
          Indah.
        </p>
        <p class="text-gray-700 mb-6">
          Anda khawatir dengan harga? Tenang, toko kami akan memberikan diskon
          untuk member dan promo spesial setiap bulannya. Bergabunglah dengan
          kami dan jadilah karakter favorit Anda dalam setiap acara cosplay
          apapun itu!
        </p>
        <p class="text-gray-700 mb-6">
          Alamat: Jl.Lebak Bulus 1 no.699 Kecamatan Cilandak Barat Jakarta
          Selatan
        </p>
      </div>
    </div>
  </main>

  @include('partials.footer')
@endsection