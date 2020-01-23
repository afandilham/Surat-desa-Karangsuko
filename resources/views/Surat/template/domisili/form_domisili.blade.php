<!DOCTYPE html>
<html lang="en">

@extends('../../../template/header')

<body>
  
  @include('../../../template/navbar')
  
  <div class="container w-auto mx-auto pt-40 card-table pl-6">
    <div class="relative flex">
      <form action="/surat/form-domisili/cari" method="GET" class="flex">
        <input type="text" class="search-input appearance-none block w-56 bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 pl-12 pr-6 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
          name="cari" placeholder="Masukkan NIK" value="{{ old('cari') }}">
        <button type="submit" class="rounded mb-3 px-4 bg-green-600 text-bold text-white shadow hover:bg-green-500 border-green-400 ml-4">Cari</button>
        <div class="absolute" style="top: 0.4rem;left: 1.1rem;">
          <i class="fad fa-search"></i>
        </div>
      </form>
    </div>
    <table id="tabel-penduduk" class="tabel-penduduk mt-4 penduduk-list">
      <thead class="bg-gray-400 text-left">
        <tr>
          <th class="border pr-20 pl-2 py-2 text-center text-sm">Cetak</th>
          <th class="border pr-20 pl-2 py-2 text-sm">NIK</th>
          <th class="border pr-20 pl-2 py-2 text-sm">No. KK</th>
          <th class="border pr-48 pl-2 py-2 text-sm">Nama</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Jenis kelamin</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Tempat lahir</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Tanggal lahir</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Alamat</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Golongan darah</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Agama</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Status</th>
          <th class="border pr-20 pl-2 py-2 text-sm">SHDRT</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Pendidikan</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Pekerjaan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($penduduk as $pddk)
        <tr>
          <td class="pr-8 pl-2 py-2">
            <a href="/surat/form-domisili/cetak_domisili/{{ $pddk->id }}"
              class="bg-gray-500 hover:bg-gray-400 text-white font-bold px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded text-center">Cetak</a>
          </td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->nik }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->no_kk }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->nama }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->kelamin }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->tempat_lahir }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->tanggal_lahir }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->alamat }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->golongan_darah }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->agama }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->status }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->SHDRT }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">
            {{ $pddk->pendidikan->keterangan }}
          </td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->pekerjaan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @extends('../../../template/footer')
</body>
</html>