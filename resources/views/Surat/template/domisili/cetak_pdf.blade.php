<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem surat Karangsuko</title>
  <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
  <style>
      @font-face {
        font-family: 'Book Old Style';
        src: url("{{ asset('/font/BOOKOS.TTF') }}");
      }
      
      @font-face {
        font-family: 'Book Old Style Bold';
        src: url("{{ asset('/font/BOOKOSB.TTF') }}");
      }
      * {
        font-family: 'Book Old Style';
        letter-spacing: 1px;
      }

      h2 {
        font-family: 'Book Old Style Bold';
        font-weight: bold;
      }

      .nomor-surat {
        font-size: .8rem;
      }
  </style>
</head>
<body>
  <div class="container mx-auto flex justify-center items-center flex-col">
    <img src="{{ asset('img/headerKarangsuko1.png') }}" alt="" style="width: 750px;">
    <h2 class="surat-text mt-4 text-xl underline font-extrabold">SURAT KETERANGAN DOMISILI</h2>
    <p class="nomor-surat text-sm">Nomor : 471.1 / 426 / 35.07.33.2009 / 2017</p>
    <div class="mt-12 mr-56">
      <p class="text-sm">Yang bertanda tangan di bawah ini :</p>
      <p class="mt-4 text-sm">a. Nama <span style="margin-left: 11rem;">: <span class="text-sm" style="font-family: 'Book Old Style Bold';">AHMAD SLAMET</span></p> 
      <p class="mt-3 text-sm">b. Jabatan <span style="margin-left: 9.8rem;">: <span class="text-sm" style="font-family: 'Book Old Style';">KEPALA DESA</span></span></p> 
      <p class="mt-4 text-sm">Dengan ini menerangkan bahwa :</p>
    </div>
    <div class="container max-w-lg flex">
      <p class="text-sm mt-3">a. Nama <span class="text-sm ml-32">: <p class="text-sm ml-2 mt-3"><strong class="text-sm">{{ $nama }}</strong></p></span>
    </div>
    <div class="container max-w-lg flex ">
      <p class="text-sm mt-3">b. Umur <span class="text-sm ml-32">: <p class="text-sm ml-2 mt-3">22 Tahun</p></span>
    </div>
    <div class="container max-w-lg flex ">
      <p class="text-sm mt-3">c. Jenis Kelamin <span class="text-sm" style="margin-left: 4rem;">: <p class="text-sm ml-2 mt-3">{{ $kelamin }}</p></span>
    </div>
    <div class="container max-w-lg flex ">
      <p class="text-sm mt-3">d. Tempat, tanggal lahir <span class="text-sm ml-1">: <p class="text-sm ml-2 mt-3">{{ $tempat_lahir }}, {{ $tanggal_lahir }}</p></span>
    </div>
    <div class="container max-w-lg flex ">
      <p class="text-sm mt-3">e. Agama <span class="text-sm" style="margin-left: 7.7rem;">: <p class="text-sm ml-2 mt-3">{{ $agama }}</p></span>
    </div>
    <div class="container max-w-lg flex ">
      <p class="text-sm mt-3">f. Alamat <span class="text-sm" style="margin-left: 7.7rem;">: <p class="text-sm ml-2 mt-3" style="width: 18.5rem;">{{ $alamat }}</p></span>
    </div>
    <div class="container max-w-lg flex">
    <p class="text-sm mt-3">g. Pekerjaan <span class="text-sm" style="margin-left: 6rem;">: <p class="text-sm ml-2 mt-3">{{ $pekerjaan }}</p></span>
    </div>
    <div class="container max-w-lg flex">
      <p class="text-sm mt-3">Maksud </p><span class="text-sm mt-3" style="margin-left: 8.6rem;">: </span>
      <div class="flex flex-col">
        <p class="text-sm ml-2 mt-3" style="width: 20rem;"><span></span>1. </span>Bahwa Orang tersebut diatas adalah benar-benar  Pendududuk Desa Karangsuko, Kecamatan Pagelaran, Kabupaten Malang dan sampai sekarang masih berdomosili di Dusun Krajan RT.15 RW.03 Desa Karangsuko  Kecamatan Pagelaran Kabupaten Malang.</p>
        <p class="text-sm ml-2 mt-3" style="width: 20rem;"><span>2. </span>Surat Keterangan ini diberikan sebagai <span style="font-family: 'Book Old Style Bold'">{{ $maksud }}.</span></p>
      </div>
    </div>
    <p class="text-sm mt-4 mr-8">Demikian Surat Keterangan ini dibuat untuk dipergunakan seperlunya.</p>
    <div class="container flex justify-center mt-20 mb-20 ml-64">
      <div class="flex flex-col text-center">
        <p class="text-sm">Malang, 31 Mei 2017</p><p class="text-sm">KEPALA DESA KARANGSUKO</p>
      </div>
    </div>
  </div>
</body>
</html>