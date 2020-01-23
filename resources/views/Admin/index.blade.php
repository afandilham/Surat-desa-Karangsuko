<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/tailwind.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.min.css">
  <title>Sistem Surat Desa</title>
</head>
<body>
  
  @include('../template/navbar')

  <div class="pt-48">
    <div class="container mx-auto max-w-4xl rounded bg-white shadow-lg card-admin pb-8">
      <ul class="flex border-b">
        <li class="-mb-px mr-1">
          <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-green-500 font-semibold" href="#">Pengaturan</a>
        </li>
        <li class="-mb-px mr-1">
          <a class="bg-white inline-block rounded-t py-2 px-4 text-gray-500 font-semibold hover:text-gray-700" href="/admin/tentang">Tentang</a>
        </li>
      </ul>
      <div class="p-6">
        <table id="tabel-penduduk" class="tabel-penduduk mt-4 penduduk-list mx-auto">
          <thead class="bg-gray-400 text-left text-sm">
            <tr>
              <th class="border pr-12 pl-2 py-2">Username</th>
              <th class="border pr-12 pl-2 py-2">Email</th>
              <th class="border pr-12 pl-2 py-2 invisible xl:visible lg:visible md:visible sm:invisible password">Password</th>
              <th class="border pr-12 pl-2 py-2 text-center" colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-sm">
            @foreach ($admin as $adm)
            <tr>
              <td class="border pr-12 pl-2 py-2">{{ $adm->name }}</td>
              <td class="border pr-12 pl-2 py-2">{{ $adm->email }}</td>
              <td class="border pr-12 pl-2 py-2 invisible xl:visible lg:visible md:visible sm:invisible password">{{ $adm->password }}</td>
              <td class="pr-2">
                <a href="/admin/hapus/{{ $adm->id }}"
                  class="modal-open bg-red-500 hover:bg-red-400 text-white font-bold px-4 border-b-4 border-red-700 hover:border-red-500 rounded m-4">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script src="/js/app.js"></script>
  <script src="/css/fontawesome/js/all.min.js"></script>
</body>
</html>