<!-- Navigation Website -->
  <!-- ------------------ -->
  <nav class="w-full fixed flex items-center z-50 justify-between flex-wrap bg-gray-300 pt-3 shadow-lg">
    <div class="container mx-auto">
      <div class="flex relative inline-block float-right pt-4">
        <div class="relative text-sm">
          <button id="userButton" class="flex items-center focus:outline-none mr-3 bg-gray-400 p-2 rounded-full">
            <i class="fad fa-user-shield"></i> <span class="hidden md:inline-block pl-2">Hi, {{ Auth::user()->name }} </span>
            <span><i class="fad fa-angle-down ml-2"></i></span>
          </button>
          <div id="userMenu"
            class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
            <ul class="list-reset">
              <li><a href="/admin"
                class="px-4 py-2 block text-gray-900 no-underline hover:no-underline">Pengaturan</a>
              </li>
              <li>
                <hr class="border-t mx-2 border-gray-400">
              </li>
              <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="px-4 py-2 text-gray-900 block no-underline hover:no-underline" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>

        <div class="block lg:hidden pr-4">
          <button id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
      </div>

      <div class="flex items-center flex-shrink-0 mr-6 mb-3">
        <img
          src="/img/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg"
          alt="malangKabupaten" class="h-16 w-16 rounded-b-full">
        <span class="font-semibold text-xl tracking-tight">Sistem Surat Desa</span>
      </div>
      <div id="nav-content" class="w-full flex-grow lg-flex lg:items-center lg:w-auto lg:block mt-2 lg:mt-0 z-20">
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
          <li class="mr-6 my-2 md:my-0">
            <a href="/" class="block py-1 md:py-3 pl-1 align-middle 
              text-gray-600 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('/') ? 'border-green-600 text-green-900' : '' }}">
              <i class="fad fa-tachometer-alt-slowest mr-2"></i>
              Dashboard
            </a>
          </li>
          <li class="mr-6 my-2 md:my-0">
            <a href="/penduduk" class="block py-1 md:py-3 pl-1 align-middle 
              text-gray-600 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('penduduk') ? 'border-green-600 text-green-900' : '' }}">
              <i class="fad fa-user-friends mr-2"></i>
              Kependudukan
            </a>
          </li>
          <li class="mr-6 my-2 md:my-0">
            <a href="/surat" class="block py-1 md:py-3 pl-1 align-middle 
              text-gray-600 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('surat') ? 'border-green-600 text-green-900' : '' }}">
              <i class="fad fa-envelope-open-text mr-2"></i>
              Surat
            </a>
          </li>
          <li class="mr-6 my-2 md:my-0">
            <a href="/admin" class="block py-1 md:py-3 pl-1 align-middle 
              text-gray-600 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('admin') ? 'border-green-600 text-green-900' : '' }}">
              <i class="fad fa-user-cog mr-2"></i>
              Admin
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navigation Website -->
  <!-- ------------------------- -->