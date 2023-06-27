<img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
  class="cursor-pointer w-12 h-12 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
  src="https://source.unsplash.com/100x100?profile" alt="Avatar">

<!-- Dropdown menu -->
<div id="userDropdown"
  class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
  <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
    <div>{{ auth()->user()->name }}</div>
    <div class="font-medium truncate">{{ auth()->user()->email }}</div>
  </div>
  <div class="py-1">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a :href="route('logout')"
        onclick="event.preventDefault();
                            this.closest('form').submit();"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white cursor-pointer">
        {{ __('Log Out') }}
      </a>
    </form>
  </div>
</div>
