<!DOCTYPE html>
<html lang="en">

@extends('../../../template/header')

<body>
  
  @include('../../../template/navbar')

  <div class="container mx-auto w-auto pt-48 flex justify-center px-5">
    <div class="bg-white shadow-2xl rounded mx-auto w-full p-10">
      <form action="/surat/form-domisili/cetak_pdf" method="get" target="_blank">
        <h3 class="text-xl uppercase font-bold text-center pb-8 flex justify-center">Form Domisili</h3>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3">
            <label for="nama" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="nama">
              Nama
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="nama" value="{{ $penduduk->nama }}">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="umur" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="umur">
              Umur
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="umur" value="" >
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="kelamin" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="kelamin">
              Kelamin
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="kelamin" value="{{ $penduduk->kelamin }}" >
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="tempat_lahir" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="tempat_lahir">
              Tempat Lahir
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="tempat_lahir" value="{{ $penduduk->tempat_lahir }}">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="tempat_lahir" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="tempat_lahir">
              Tanggal Lahir
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="tanggal_lahir" type="date" value="{{ $penduduk->tanggal_lahir }}">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="agama" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="agama">
              Agama
            </label>
            <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="agama" type="text" value="{{ $penduduk->agama }}">
          </div>
          <div class="w-full px-3">
            <label for="alamat" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="alamat">
              Alamat 
            </label>
          <textarea class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="alamat" >{{ $penduduk->alamat }}</textarea>
          </div>
          <div class="w-full px-3">
            <label for="pekerjaan" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="pekerjaan">
              Pekerjaan
            </label>
          <input class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="pekerjaan" value="{{ $penduduk->pekerjaan }}" type="text" >
          </div>
          <div class="w-full px-3">
            <label for="alamat" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-4 pt-4" name="maksud">
              Maksud Pembuatan 
            </label>
            <textarea class="appearance-none block w-full bg-gray-200 shadow text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="maksud" ></textarea>
          </div>
          <div class="w-full px-3 flex justify-center">
            <button type="submit" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-400 uppercase text-white border-b-4 border-blue-600">Cetak</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @extends('../../../template/footer')
</body>
</html>