@extends('master')
@section('content')
    <section class="bg-white rounded-lg">
        <div class="px-4 py-2 mx-auto max-w-2xl md:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Update Sekolah/Madrasah</h2>
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900">
                            Pilih Sekolah/Madrasah
                        </label>
                        <select id="sekolah" name="sejolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Sekolah/Madrasah</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="tahun_ajaran" class="block mb-2 text-sm font-medium text-gray-900">
                            Tahun Ajaran
                        </label>
                        <input type="number" name="tahun_ajaran" id="tahun_ajaran"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tahun Ajaran" required="">
                    </div>
                    <div class="w-full">
                        <label for="nss" class="block mb-2 text-sm font-medium text-gray-900">
                            Status Akreditasi
                        </label>
                        <input type="number" name="nss" id="nss"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Status Akreditasi" required="">
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
                                <label for="guru_s3" class="block mb-2 text-sm font-medium text-gray-900">
                                    Jumlah Guru S3
                                </label>
                                <input type="number" name="guru_s3" id="guru_s3"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jumlah Guru S3" required="">
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
                            Waktu Belajar
                        </label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-pagi" type="radio" value=""
                                        name="list-radio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-pagi"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Pagi
                                    </label>
                                </div>
                            </li>
                            <li class="w-full dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-siang" type="radio" value=""
                                        name="list-radio"
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
                        <input type="text" name="kepala" id="kepala"
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
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900">
                            Kurikulum Sekolah/Madrasah
                        </label>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-k13" type="radio" value=""
                                        name="list-radio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-k13"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        K13
                                    </label>
                                </div>
                            </li>
                            <li class="w-full dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-ikm" type="radio" value=""
                                        name="list-radio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-ikm"
                                        class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        IKM
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </form>
        </div>
    </section>
@endsection
