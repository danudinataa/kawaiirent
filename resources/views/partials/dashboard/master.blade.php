<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="referrer" content="always">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  <title> {{ $title }} | Kawaii Rent</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
  <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
    @include('partials.dashboard.sidebar')

    <div class="flex-1 flex flex-col overflow-hidden">
      @include('partials.dashboard.header')

      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
          @yield('body')
        </div>
      </main>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
