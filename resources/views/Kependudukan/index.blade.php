<!DOCTYPE html>
<html lang="en">

@extends('../template/header')

<body>

  @include('../template/navbar')

  <div class="container w-auto mx-auto pt-40 card-table pl-6">
    <div class="flex justify-between">
      <a href="/penduduk/tambah"
        class="font-bold text-white font-mono text-lg px-4 py-2 bg-blue-600 rounded shadow hover:bg-blue-500 my-4 border-b-4 border-blue-400">Tambah
        Data</a>
    </div>
    <div class="relative flex">
      <form action="/penduduk/cari" method="GET" class="flex">
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
          <th class="border pr-20 pl-2 py-2 text-center text-sm" colspan="2">Aksi</th>
          <th class="border pr-12 pl-2 py-2 text-sm">No</th>
          <th class="border pr-48 pl-2 py-2 text-sm">Nama</th>
          <th class="border pr-20 pl-2 py-2 text-sm">NIK</th>
          <th class="border pr-20 pl-2 py-2 text-sm">No. KK</th>
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
          <th class="border pr-20 pl-2 py-2 text-sm">Ibu</th>
          <th class="border pr-20 pl-2 py-2 text-sm">Ayah</th>
        </tr>
      </thead>
      <tbody>
        {{-- Increment number --}}
        @php $i = 1 @endphp
        @foreach ($penduduk as $pddk)
        <tr>
          <td class="pr-8 pl-2 py-2">
            <a href="/penduduk/edit/{{ $pddk->id }}"
              class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold px-4 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">Edit</a>
          </td>
          <td class="pr-2">
            <a href="/penduduk/hapus/{{ $pddk->id }}"
              class="bg-red-500 hover:bg-red-400 text-white font-bold px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Delete</a>
          </td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $i++ }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->nama }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->nik }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->no_kk }}</td>
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
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->ibu }}</td>
          <td class="border pr-12 pl-2 py-2 text-sm">{{ $pddk->ayah }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{-- <!--  Modal Delete -->
  <!-- https://www.tailwindtoolbox.com/components/modal -->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      <div
        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
          viewBox="0 0 18 18">
          <path
            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
          </path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-4">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Hapus data</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
              viewBox="0 0 18 18">
              <path
                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
              </path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <p class="font-bold font-mono">Apakah anda ingin menghapus data tersebut?</p>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <a href="/penduduk/hapus/{{ $pddk }}" class="px-4 bg-red-400 p-2 rounded text-white font-bold hover:bg-red-300 mr-2">Ya</a>
          <a href="#" class="modal-close px-2 bg-indigo-500 p-2 rounded font-bold text-white hover:bg-indigo-400">Tidak</a>
        </div>

      </div>
    </div>
  </div> --}}

  <!-- Scripts Website -->
  <!-- --------------- -->
  @extends('../template/footer')
</body>

</html>