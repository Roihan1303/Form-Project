@extends('master')
@section('content')
    <section class="bg-white rounded-lg">
        <div class="px-4 py-2 mx-auto max-w-2xl md:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Pendaftaran Sekolah/Madrasah Baru</h2>
            <form action="{{ route('pendaftaranSekolah.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="jenjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Jenjang Sekolah/Madrasah
                        </label>
                        <select id="jenjang" name="jenjang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Jenjang Sekolah/Madrasah</option>
                            <option value="SD/MI">SD/MI</option>
                            <option value="SMP/MTs">SMP/MTs</option>
                            <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Sekolah/Madrasah
                        </label>
                        <input type="text" name="nama_sekolah" id="sekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Sekolah/Madrasah" required="">
                    </div>
                    <div class="w-full">
                        <label for="nss" class="block mb-2 text-sm font-medium text-gray-900">
                            Nomor Statistik Sekolah/Madrasah
                        </label>
                        <input type="number" name="nss" id="nss"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Statistik Sekolah/Madrasah" required="">
                    </div>
                    <div class="w-full">
                        <label for="npsn" class="block mb-2 text-sm font-medium text-gray-900">
                            Nomor Pokok Sekolah/Madrasah Nasional
                        </label>
                        <input type="number" name="npsn" id="npsn"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Pokok Sekolah/Madrasah Nasional" required="">
                    </div>
                    <div class="w-full">
                        <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900">
                            Nomor Telepon Sekolah/Madrasah
                        </label>
                        <input type="number" name="telepon" id="telepon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Telepon Sekolah/Madrasah" required="">
                    </div>
                    <div class="w-full">
                        <label for="tanggal_berdiri" class="block mb-2 text-sm font-medium text-gray-900">
                            Tanggal Berdiri Sekolah
                        </label>
                        <input type="date" name="tanggal_berdiri" id="tanggal_berdiri"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="yayasan" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Yayasan Sekolah/Madrasah
                        </label>
                        <input type="text" name="yayasan" id="yayasan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Yayasan Sekolah/Madrasah" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900">
                            Sertifikat BPHNU
                        </label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-yes" type="radio" value="1"
                                        name="sertifikat_bphnu"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                        required>
                                    <label for="horizontal-list-radio-yes"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Ya
                                    </label>
                                </div>
                            </li>
                            <li class="w-full dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-no" type="radio" value="0"
                                        name="sertifikat_bphnu"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                        required>
                                    <label for="horizontal-list-radio-no"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Tidak
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="upload-bphnu" class="hidden sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="bphnu">
                            Upload file
                        </label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                            id="bphnu" name="file_bphnu" type="file" accept=".pdf">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">
                            Alamat Sekolah/Madrasah
                        </label>
                        <textarea id="alamat" rows="8" name="alamat"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Alamat Sekolah/Madrasah" required></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="con_guru" class="block mb-1 text-sm font-medium text-gray-900">
                            Generate Admin Sekolah/Madrasah
                        </label>
                        <div class="py-4 px-3 border border-gray-300 text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                            id="con_guru">
                            <div class="sm:col-span-2">
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
                                    Username
                                </label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Username">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                    Password
                                </label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </form>
        </div>
    </section>

    <!-- action hidden file upload -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const yesRadio = document.getElementById('horizontal-list-radio-yes');
            const noRadio = document.getElementById('horizontal-list-radio-no');
            const uploadDiv = document.getElementById('upload-bphnu');

            yesRadio.addEventListener('change', function() {
                if (this.checked) {
                    uploadDiv.classList.remove('hidden');
                }
            });

            noRadio.addEventListener('change', function() {
                if (this.checked) {
                    uploadDiv.classList.add('hidden');
                }
            });
        });
    </script>
@endsection
