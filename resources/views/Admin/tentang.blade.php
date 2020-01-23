<!DOCTYPE html>
<html lang="en">

@extends('../template/header')

<body>
  @include('../template/navbar')

  <div class="pt-48">
    <div class="container mx-auto max-w-4xl rounded bg-white shadow-lg card-admin">
      <ul class="flex border-b">
        <li class="-mb-px mr-1">
          <a class="bg-white inline-block rounded-t py-2 px-4 text-gray-500 hover:text-gray-700 font-semibold" href="/admin">Pengaturan</a>
        </li>
        <li class="-mb-px mr-1">
          <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-green-500 font-semibold" href="#">Tentang</a>
        </li>
      </ul>
      <div class="font-mono text-center antialiased mt-4 mb-2 p-5">
        <h3 class="text-3xl font-mono font-bold">Tentang Aplikasi</h3>
        <div class="Email mt-4">
          <h4 class="text-xl mt-2">Developer Contact</h4>
          <p class="text-base">afandilham@gmail.com</p>
        </div>
        <footer class="text-lg font-bold mt-12">
          &copy; Copyright 2019 &#x1F9E1; KKM 49 UIN MALANG
        </footer>
      </div>
    </div>
  </div>
  
  @extends('../template/footer')
</body>
</html>