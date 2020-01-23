<!DOCTYPE html>
<html lang="en">

@extends('../template/header')

<body>

  @include('../template/navbar')

  <div class="container w-auto pt-40 mx-auto">
    <div class="w-full shadow-2xl rounded px-4 py-10">
      <a href="/penduduk"
        class="font-bold text-white font-mono text-lg px-4 py-2 bg-orange-500 border-4 rounded-full hover:bg-orange-400">Kembali</a>
      <form action="/penduduk/store" class="w-full max-w-lg pt-8 pl-4" method="POST">
        {{ csrf_field() }}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              NIK
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password" type="text" placeholder="Masukkan NIK" name="nik" value="{{ old('nik') }}">
            <p class="text-gray-600 text-xs italic">Ex: 3507330xxxxxxxxx</p>
            @if ($errors->has('nik'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
              <span class="block sm:inline">{{ $errors->first('nik') }}</span><br>  
            </div>
            @endif
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              No. KK
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password" type="text" placeholder="Masukkan KK" name="no_kk" value="{{ old('no_kk') }}">
            <p class="text-gray-600 text-xs italic">Ex: 3507330xxxxxxxxx</p>
            @if ($errors->has('no_kk'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
              <span class="block sm:inline">{{ $errors->first('no_kk') }}</span><br>  
            </div>
            @endif
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nama">
              Nama
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password" type="text" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
            <p class="text-gray-600 text-xs italic">Ex: Aji Pangestu, Lia Malarangeng, dll.</p>
            @if ($errors->has('nama'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
              <span class="block sm:inline">{{ $errors->first('nama') }}</span><br>  
            </div>
            @endif
          </div>
        </div>
        <div class="w-full mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-kelamin">
            Jenis Kelamin
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-kelamin" name="kelamin">
              <option selected disabled class="bg-gray-300">Jenis Kelamin</option>
              <option value="laki - laki">Laki - laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Tempat lahir
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="tempat" type="text" placeholder="Masukkan tempat lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
            <p class="text-gray-600 text-xs italic mt-2">Ex: Sampang</p>
            @if ($errors->has('tempat_lahir'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('tempat_lahir') }}</span><br>  
              </div>
            @endif
          </div>
          <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              Tanggal lahir
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="tanggal_lahir" type="date" placeholder="90210" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @if ($errors->has('tanggal_lahir'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('tanggal_lahir') }}</span><br>  
              </div>
            @endif
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-alamat">
              Alamat
            </label>
            <textarea
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="alamat" type="text" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}"></textarea>
            <p class="text-gray-600 text-xs italic">Ex: DSN ADILUWIH , RT : 12, RW : 3, Kode Pos : 65174, Telp : x</p>
          </div>
        </div>
        <div class="w-full mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-kelamin">
            Golongan darah
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-kelamin" name="golongan_darah">
              <option selected disabled class="bg-gray-300">Golongan darah</option>
              <option value="A">A</option>
              <option value="AB">AB</option>
              <option value="B">B</option>
              <option value="O">O</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Agama
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password" type="text" placeholder="Masukkan Agama" name="agama" value="{{ old('agama') }}">
            <p class="text-gray-600 text-xs italic">Ex: Islam, Kristen ...</p>
            @if ($errors->has('agama'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('agama') }}</span><br>  
              </div>
            @endif
          </div>
        </div>
        <div class="w-full mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-kelamin">
            Status
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-kelamin" name="status">
              <option selected disabled class="bg-gray-300">Pilih Status</option>
              <option value="Belum kawin">Belum kawin</option>
              <option value="Kawin">Kawin</option>
              <option value="Cerai mati">Cerai mati</option>
              <option value="Cerai hidup">Cerai hidup</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
          </div>
        </div>
        <div class="w-full mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-kelamin">
            SHDRT
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-kelamin" name="shdrt">
              <option selected disabled class="bg-gray-300">Pilih SHDRT</option>
              <option value="Kepala keluarga">Kepala keluarga</option>
              <option value="Isteri">Isteri</option>
              <option value="Anak">Anak</option>
              <option value="Famili lain">Famili lain</option>
              <option value="Menantu">Menantu</option>
              <option value="Cucu">Cucu</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
          </div>
          <p class="text-gray-600 text-xs italic mb-4">Bagian dalam keluarga ...</p>
        </div>
        <div class="w-full mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-kelamin">
            Pendidikan
          </label>
          <div class="relative">
            <select
              class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-kelamin" name="id_pendidikan">
              <option selected disabled class="bg-gray-300">Pilih Pendidikan</option>
              @foreach ($pendidikan as $pddk)
                <option value="{{ $pddk->id }}">{{ $pddk->keterangan }}</option>
              @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
          </div>
          <p class="text-gray-600 text-xs italic mb-4">Pendidikan keluarga ...</p>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-pekerjaan">
              Pekerjaan
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="pekerjaan" type="text" placeholder="Masukkan pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
            <p class="text-gray-600 text-xs italic">Ex: Petani, Programmer ...</p>
            @if ($errors->has('pekerjaan'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('pekerjaan') }}</span><br>  
              </div>
            @endif
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ibu">
              Nama ibu
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="ibu" type="text" placeholder="Masukkan nama ibu" name="ibu" value="{{ old('ibu') }}">
            @if ($errors->has('ibu'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('ibu') }}</span><br>  
              </div>
            @endif
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ayah">
              Nama ayah
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="ayah" type="text" placeholder="Masukkan nama ayah" name="ayah" value="{{ old('ayah') }}">
            @if ($errors->has('ayah'))
              <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <span class="block sm:inline">{{ $errors->first('ayah') }}</span><br>  
              </div>
            @endif  
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 flex justify-between">
            <a href="#" class="font-bold font-mono text-white py-3 px-5 rounded bg-gray-600 hover:bg-gray-500 shadow">Clear</a>
            <button type="submit" class="font-bold font-mono text-white py-3 px-5 rounded bg-blue-600 hover:bg-blue-500 shadow">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Scripts Website -->
  <!-- --------------- -->
  @extends('../template/footer')
</body>

</html>