<!DOCTYPE html>
<html lang="en">

@extends('template/header')

<body>

  @include('template/navbar')

  <!-- Website Content -->
  <!-- --------------- -->
  <div class="container w-full mx-auto pt-40">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
      <div class="flex flex-wrap justify-center">
        <!-- Card data penduduk -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-3 animated fadeInUp">
          <div class="bg-white border rounded shadow-lg p-2 text-blue-600">
            <div class="flex flex-row justify-center">
              <div class="p-2 p-3 mb-3 bg-blue-500 border rounded shadow-lg text-white">
                <i class="fad fa-users fa-4x"></i>
              </div>
            </div>
            <p class="text-lg flex justify-center antialiased text-gray-500 font-bold font-mono">Laki - laki</p>
            <p class="text-3xl font-bold font-sans flex justify-center text-gray-700">{{ $laki_laki }}</p>
            <p class="text-lg flex justify-center antialiased text-gray-500 font-bold font-mono pt-3">Perempuan</p>
            <p class="text-3xl font-bold font-sans flex justify-center text-gray-700">{{ $perempuan }}</p>
          </div>
        </div>
        <!-- End Card data penduduk -->

        <!-- Card data total penduduk -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-3 animated fadeInUp">
          <div class="bg-white border rounded shadow-lg p-2 text-green-600">
            <div class="flex flex-row justify-center">
              <div class="p-3 mb-3 bg-green-500 border rounded shadow-lg text-white">
                <i class="fad fa-calculator-alt fa-4x"></i>
              </div>
            </div>
            <p class="text-lg flex justify-center antialiased text-gray-500 font-bold font-mono">Total penduduk</p>
            <p class="text-3xl font-bold font-sans flex justify-center text-gray-700 pb-20">{{ $total_penduduk }}</p>
          </div>
        </div>
        <!-- End Card total data penduduk -->
        
        <!-- Total kepala keluarga -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-3 animated fadeInUp">
          <div class="bg-white border rounded shadow-lg p-2 text-green-600">
            <div class="flex flex-row justify-center">
              <div class="p-2 mb-3 p-3 mb-3 bg-yellow-500 border rounded shadow-lg text-white">
                <i class="fad fa-house-flood fa-4x"></i>
              </div>
            </div>
            <p class="text-lg flex justify-center antialiased text-gray-500 font-bold font-mono pb-1">Total Kepala Keluarga</p>
            <p class="text-3xl font-bold font-sans flex justify-center text-gray-700 pb-20">{{ $kepala_keluarga }}</p>
          </div>
        </div>
        <!-- End Total kepala keluarga -->
      </div>
    </div>
  </div>
  <!-- End Website content -->
  <!-- ------------------- -->


  <!-- Script Website -->
  <!-- Must be on the end of html's  -->
  @extends('template/footer')
</body>

</html>