<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
  <div class="flex items-center">
    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
      <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
    </button>

    <div class="relative mx-4 lg:mx-0 text-gray-700 text-2xl font-medium">
      Hi {{ auth()->user()->name }}! <br> Welcome to Kawaiirent Dashboard!!
    </div>
  </div>

  <div class="flex items-center">
    @include('partials.avatar')
  </div>
</header>
