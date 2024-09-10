@extends('master')
@section('content')
    <section>
        <div class="bg-white rounded-xl p-4 space-y-4">
            <div>
                <form class="mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search by School Name" required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
            <div class="">
                <div class="md:mx-auto flex md:flex-row gap-x-4 gap-y-4 flex-col mx-4 my-4 md:px-4 py-3">
                    <a href="{{ route('jenjang') }}"
                        class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                        <div class="px-4 py-6">
                            <img class="w-full h-52" src="{{ asset('assets/img/Elementary.svg') }}" alt="">
                        </div>
                        <div class="px-10 py-3 space-y-2">
                            <span
                                class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                24 Sekolah/Madrasah
                            </span>
                            <p class="cursor-pointer hover:underline">
                                Sekolah/Madrasah dengan Jenjang
                                <span class="font-semibold text-nowrap">
                                    SD/MI
                                </span>
                            </p>
                        </div>
                        <div class="px-10 py-3">
                            <p
                                class="cursor-pointer inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Lihat Sekolah/Madrasah
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('jenjang') }}"
                        class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                        <div class="px-4 py-6">
                            <img class="w-full h-52" src="{{ asset('assets/img/Secondary.svg') }}" alt="">
                        </div>
                        <div class="px-10 py-3 space-y-2">
                            <span
                                class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                24 Sekolah/Madrasah
                            </span>
                            <p class="cursor-pointer hover:underline">
                                Sekolah/Madrasah dengan Jenjang
                                <span class="font-semibold text-nowrap">
                                    SMP/MTs
                                </span>
                            </p>
                        </div>
                        <div class="px-10 py-3">
                            <p
                                class="cursor-pointer inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Lihat Sekolah/Madrasah
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('jenjang') }}"
                        class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                        <div class="px-4 py-6">
                            <img class="w-full h-52" src="{{ asset('assets/img/HighSchool.svg') }}" alt="">
                        </div>
                        <div class="px-10 py-3 space-y-2">
                            <span
                                class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                24 Sekolah/Madrasah
                            </span>
                            <p class="cursor-pointer hover:underline">
                                Sekolah/Madrasah dengan Jenjang
                                <span class="font-semibold text-nowrap">
                                    SMA/SMK/MA
                                </span>
                            </p>
                        </div>
                        <div class="px-10 py-3">
                            <p
                                class="cursor-pointer inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Lihat Sekolah/Madrasah
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
