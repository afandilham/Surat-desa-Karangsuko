<!DOCTYPE html>
<html lang="en">

@extends('../template/header')

<body>

  @include('../template/navbar')

  <div class="container max-w-2xl mx-auto pt-32">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
    <div class="flex justify-center">
      <input type="text" id="cari-surat" class="search-input appearance-none block w-56 bg-gray-200 
        text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none 
        focus:bg-white focus:border-gray-500" data-table="penduduk-list" placeholder="Cari surat">
    </div>
    <div class="collection-surat">
      <div class="NotFound"></div>
      <div class="card-surat p-4 bg-white border rounded shadow-lg flex justify-between items-center mt-6">
        <p class="judul-surat text-sm font-semibold text-gray-800">Surat Keterangan Domisili</p>
        <a href="/surat/form-domisili" class="px-4 py-1 bg-orange-500 hover:bg-orange-600 shadow border-b-4 border-orange-800 rounded uppercase font-bold text-white text-sm">Pilih</a>
      </div>
      <div class="card-surat p-4 bg-white border rounded shadow-lg flex justify-between items-center mt-2">
        <p class="text-sm font-semibold text-gray-800">Surat Keterangan Kematian</p>
        <a href="#" class="px-4 py-1 bg-orange-500 hover:bg-orange-600 shadow border-b-4 border-orange-800 rounded uppercase font-bold text-white text-sm">Pilih</a>
      </div>
    </div>
    </div>
  </div>


  @extends('../template/footer')
</body>

</html>