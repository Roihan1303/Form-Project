@extends('master')
@section('content')
    <section class="bg-white rounded-lg">
        <div class="px-4 py-2 mx-auto max-w-2xl md:py-6 space-y-10">
            <!-- Alert -->
            @if (!$profilSekolah)
                <div class="w-full bg-red-100 mx-auto py-3 px-4 mb-5 rounded-lg">
                    <p class="font-medium text-lg text-red-600 text-center">
                        Data
                        <span class="text-nowrap">
                            {{ auth()->user()->sekolah->nama }}
                        </span>
                        Tahun Ajaran
                        <span class="text-nowrap">
                            {{ $year->tahun }}
                        </span>
                        telah dikumpulkan!
                    </p>
                </div>
            @endif
            <!-- Form -->
            <h2 class="mb-4 text-xl font-bold text-gray-900">
                Pendataan Sekolah/Madrasah
            </h2>
            <form action="{{ route('pendataanSekolah.create') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900">
                            Pilih Sekolah/Madrasah
                        </label>
                        <input type="text" name="sekolah" id="school"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ auth()->user()->sekolah->nama }}" readonly>
                    </div>
                    <div class="w-full">
                        <label for="tahun_ajaran" class="block mb-2 text-sm font-medium text-gray-900">
                            Tahun Ajaran
                        </label>
                        <input type="hidden" name="tahun_ajaran" value="{{ $year->id }}">
                        <input type="text" name="tahun"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $year->tahun }}" readonly>
                    </div>
                    <div class="w-full">
                        <label for="akreditasi" class="block mb-2 text-sm font-medium text-gray-900">
                            Status Akreditasi
                        </label>
                        <select id="akreditasi" name="akreditasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Status Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900">
                            Waktu Belajar
                        </label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-pagi" type="radio" value="Pagi"
                                        name="waktu_belajar"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-pagi"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Pagi
                                    </label>
                                </div>
                            </li>
                            <li class="w-full dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-siang" type="radio" value="Siang"
                                        name="waktu_belajar"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-siang"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Siang
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="kepala" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Kepala Sekolah/Madrasah
                        </label>
                        <input type="text" name="kepala_sekolah" id="kepala"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Kepala Sekolah/Madrasah" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ketua_yayasan" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Ketua Yayasan Sekolah/Madrasah
                        </label>
                        <input type="text" name="ketua_yayasan" id="ketua_yayasan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Ketua Yayasan Sekolah/Madrasah" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="jml_guru" class="block mb-1 text-sm font-medium text-gray-900">
                            Jumlah Guru
                        </label>
                        <div class="py-4 px-3 border border-gray-300 text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                            id="jml_guru">
                            <div class="w-full">
                                <label for="guru_s1" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru S1
                                </label>
                                <input type="number" name="guru_s1" id="guru_s1"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru S1" required="">
                            </div>
                            <div class="w-full">
                                <label for="guru_s2" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru S2
                                </label>
                                <input type="number" name="guru_s2" id="guru_s2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru S2" required="">
                            </div>
                            <div class="w-full">
                                <label for="guru_nonGelar" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru Non Gelar
                                </label>
                                <input type="number" name="guru_nonGelar" id="guru_nonGelar"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru Non Gelar" required="">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="con_guru" class="block mb-1 text-sm font-medium text-gray-900">
                            Keadaan Guru
                        </label>
                        <div class="py-4 px-3 border border-gray-300 text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                            id="con_guru">
                            <div class="w-full">
                                <label for="guru_pns" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru PNS
                                </label>
                                <input type="number" name="guru_pns" id="guru_pns"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru PNS" required="">
                            </div>
                            <div class="w-full">
                                <label for="guru_bantu" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru Pembantu
                                </label>
                                <input type="number" name="guru_bantu" id="guru_bantu"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru Pembantu" required="">
                            </div>
                            <div class="w-full">
                                <label for="guru_yys" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru Yayasan
                                </label>
                                <input type="number" name="guru_yys" id="guru_yys"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru Yayasan" required="">
                            </div>
                            <div class="w-full">
                                <label for="guru_hon" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru Honorer
                                </label>
                                <input type="number" name="guru_hon" id="guru_hon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru Honorer" required="">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900">
                            Kurikulum Sekolah/Madrasah
                        </label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-k13" type="radio" value="K13" name="kurikulum"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-k13"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        K13
                                    </label>
                                </div>
                            </li>
                            <li class="w-full dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-ikm" type="radio" value="IKM" name="kurikulum"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-ikm"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        IKM
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="data-siswa" class="block mb-1 text-sm font-medium text-gray-900">
                            Data Siswa
                        </label>
                        <div class="py-4 px-3 border border-gray-300 text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2"
                            id="data-siswa">
                            @if (auth()->user()->sekolah->jenjang_id == 1)
                                <div class="sm:col-span-2">
                                    <label for="kls-1" class="block text-sm font-medium text-gray-900">
                                        Kelas I
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-1">
                                        <div class="w-full">
                                            <label for="lk1" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk1"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr1" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr1"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-2" class="block text-sm font-medium text-gray-900">
                                        Kelas II
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-2">
                                        <div class="w-full">
                                            <label for="lk2" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk2"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr2" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr2"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-3" class="block text-sm font-medium text-gray-900">
                                        Kelas III
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-3">
                                        <div class="w-full">
                                            <label for="lk3" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk3"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr3" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr3"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-4" class="block text-sm font-medium text-gray-900">
                                        Kelas IV
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-4">
                                        <div class="w-full">
                                            <label for="lk4" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk4"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr4" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr4"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-5" class="block text-sm font-medium text-gray-900">
                                        Kelas V
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-5">
                                        <div class="w-full">
                                            <label for="lk5" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk5"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr5" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr5"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas VI
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                            @elseif(auth()->user()->sekolah->jenjang_id == 2)
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas VII
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas VIII
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas IX
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas X
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="laki" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="laki"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="perempuan" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="perempuan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas XI
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="kls-6" class="block text-sm font-medium text-gray-900">
                                        Kelas XII
                                    </label>
                                    <div class="py-4  text-gray-900 text-sm rounded-lg grid gap-4 sm:grid-cols-2 sm:gap-6"
                                        id="kls-6">
                                        <div class="w-full">
                                            <label for="lk6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Laki Laki
                                            </label>
                                            <input type="number" name="laki[]" id="lk6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Laki Laki" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="pr6" class="block mb-2 text-sm font-medium text-gray-900">
                                                Siswa Perempuan
                                            </label>
                                            <input type="number" name="perempuan[]" id="pr6"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Jumlah Siswa Perempuan" required="">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit"
                    @if (!$profilSekolah) class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-400 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900" disabled
                @else
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800" @endif>
                    Submit
                </button>
            </form>
        </div>
    </section>
@endsection
