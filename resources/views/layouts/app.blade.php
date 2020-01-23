<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @extends('../template/header')
</head>
<body>
  <div id="app">  
    @guest
    <nav class="w-full fixed flex items-center z-50 justify-between flex-wrap bg-gray-300 pt-3 shadow-lg">
      <div class="container mx-auto">
        <div id="userMenu">
          <div class="flex relative inline-block float-right pt-4">
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
                <a href="/login" class="block py-1 md:py-3 pl-1 align-middle 
                text-green-900 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('login') ? 'border-green-600 text-green-900' : '' }}">
                <i class="fad fa-tachometer-alt-slowest mr-2"></i>
                Login
              </a>
            </li>
              <li class="mr-6 my-2 md:my-0">
                <a href="/register" class="block py-1 md:py-3 pl-1 align-middle 
                  text-gray-600 no-underline hover:text-gray-900 border-b-2 border-gray-100 hover:border-green-600 {{ request()->is('register') ? 'border-green-600 text-green-900' : '' }}">
                  <i class="fad fa-user-friends mr-2"></i>
                  Register
                </a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    @else
          @include('template/navbar')
      @endguest

        <main class="py-4">
            @yield('content')
        </main>
        
    @extends('../template/footer')
  </div>
</body>
</html>
