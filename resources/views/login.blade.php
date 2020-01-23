<!DOCTYPE html>
<html lang="en">

@extends('template/header')

<body>
  <div class="container mx-auto items-center">
    <div class="flex justify-center flex-wrap">
      <img src="/img/Logo_Kabupaten_Malang_-_Seal_of_Malang_Regency.svg" alt="" class="h-40 w-40 relative object-center mt-12">
      <h2 class="font-bold text-center font-mono pt-20 text-3xl absolute mt-32 sm:text-l">Sistem surat desa</h2>
    </div>
  </div>
  <div class="container flex justify-center mx-auto mt-16">
    <div class="w-full max-w-xs">
      <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4" method="GET">
        <div class="mb-4">
          <label class="block font-mono text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
        </div>
        <div class="mb-6">
          <label class="block font-mono text-gray-700 text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
        </div>
        <a href="index.html" class="bg-green-500 hover:bg-green-400 text-white font-bold py-3 px-4 rounded shadow outline-none" type="submit">
          Sign In
        </a>
      </form>
      <p class="text-center text-gray-500 text-xs">
        &copy;2020 KKM UIN Malang 49
      </p>
    </div>
  </div>

  @extends('template/footer')

</body>
</html>