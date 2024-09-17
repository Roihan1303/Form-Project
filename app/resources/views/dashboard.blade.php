@extends('master')
@section('content')
    <section>
        <div class="bg-white rounded-xl p-4 space-y-4">
            <!-- Search Bar -->
            @if (auth()->user()->sekolah_id == null)
                <div>
                    <form class="mx-auto">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Cari Nama Sekolah/Madrasah..." required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
            @endif
            <!-- Content -->
            <div class="">
                <div class="relative w-full">
                    <div
                        class="flex md:flex-row flex-col gap-y-4 md:justify-between md:items-center bg-gradient-to-r from-sky-500 to-violet-500 px-4 py-3 rounded-lg">
                        <div class="space-y-1">
                            <h2 class="font-semibold text-4xl text-white">
                                <span class="text-nowrap">
                                    Selamat Datang,
                                </span>
                                {{ auth()->user()->name }}👋
                            </h2>
                            @if (auth()->user()->sekolah_id == null)
                            @else
                                <p class="text-white font-medium text-lg">
                                    Tahun Ajaran
                                    <span class="font-semibold">
                                        {{ $current_year->tahun }}
                                    </span>
                                </p>
                            @endif
                            <p class="text-white font-medium text-lg">
                                Kelola Administrasi Sekolah dan Madrasah Anda Disini!
                            </p>
                        </div>
                        @if (auth()->user()->sekolah_id == null)
                            <div class="inline-flex items-center gap-x-2 border-2 border-white rounded-lg px-4 py-3">
                                <svg class="w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M21 21H3C2.44772 21 2 20.5523 2 20V12.4868C2 12.1978 2.12501 11.9229 2.34282 11.733L6 8.54435V4C6 3.44772 6.44772 3 7 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21ZM9 19H12V12.9416L8 9.45402L4 12.9416V19H7V15H9V19ZM14 19H20V5H8V7.12729C8.23444 7.12729 8.46888 7.20938 8.65718 7.37355L13.6572 11.733C13.875 11.9229 14 12.1978 14 12.4868V19ZM16 11H18V13H16V11ZM16 15H18V17H16V15ZM16 7H18V9H16V7ZM12 7H14V9H12V7Z">
                                    </path>
                                </svg>
                                <p class="font-semibold text-xl text-white">
                                    {{ $sekolah->count() }} Sekolah dan Madrasah
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
                @if (auth()->user()->sekolah_id == null)
                    <!-- ADMIN YAYASAN -->
                    <div class="mx-auto flex md:flex-row gap-x-4 gap-y-4 flex-col my-2 py-3">
                        <a href="{{ route('sd') }}"
                            class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                            <div class="px-4 py-6">
                                <img class="w-full h-52" src="{{ asset('assets/img/Elementary.svg') }}" alt="">
                            </div>
                            <div class="px-10 py-3 space-y-2">
                                <span
                                    class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    {{ $sd->count() }} Sekolah/Madrasah
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
                                            stroke-wid th="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </p>
                            </div>
                        </a>
                        <a href="{{ route('smp') }}"
                            class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                            <div class="px-4 py-6">
                                <img class="w-full h-52" src="{{ asset('assets/img/Secondary.svg') }}" alt="">
                            </div>
                            <div class="px-10 py-3 space-y-2">
                                <span
                                    class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    {{ $smp->count() }} Sekolah/Madrasah
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
                        <a href="{{ route('sma') }}"
                            class="rounded-lg border border-slate-400 md:w-1/3 py-4 bg-gray-50 shadow-md hover:shadow-xl hover:bg-gray-100 duration-300">
                            <div class="px-4 py-6">
                                <img class="w-full h-52" src="{{ asset('assets/img/HighSchool.svg') }}" alt="">
                            </div>
                            <div class="px-10 py-3 space-y-2">
                                <span
                                    class="bg-sky-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                    {{ $sma->count() }} Sekolah/Madrasah
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
                @else
                    <!-- ADMIN SEKOLAH -->
                    <section>
                        <div class="w-full bg-white rounded-lg px-0 py-3">
                            <div class="mb-4 w-full">
                                <form action="{{ route('dashboardPilihTahun') }}" method="POST" class="w-full mb-0">
                                    @csrf
                                    <div class="flex flex-row gap-x-4 justify-start">
                                        <select id="" name="tahun_ajaran"
                                            class="bg-gray-50 border md:w-72 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            <option disabled selected>Pilih Tahun Ajaran</option>
                                            @foreach ($year as $years)
                                                <option value="{{ $years->id }}">{{ $years->tahun }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 focus:outline-none">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                                <!-- Left -->
                                <div class="w-full border grid grid-cols-1 rounded-md">
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Alamat Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                                            </path>
                                        </svg>
                                        <span class="w-full">
                                            {{ $sekolah->alamat }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="No Telepon Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $sekolah->telepon }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Tanggal Berdidi Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 11H8V13H6V11ZM11 11H13V13H11V11ZM16 11H18V13H16V11Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $sekolah->tanggal_berdiri }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Kepala Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $detail->nama_kepala_sekolah }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Akreditasi Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM9 16.4185V19.4676L12 17.6676L15 19.4676V16.4185C14.0736 16.7935 13.0609 17 12 17C10.9391 17 9.92643 16.7935 9 16.4185ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            Akreditasi {{ $detail->status_akreditasi }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Jam Belajar Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $detail->waktu_belajar }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2 items-center"
                                        title="Kurikulum Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M21 18H6C5.44772 18 5 18.4477 5 19C5 19.5523 5.44772 20 6 20H21V22H6C4.34315 22 3 20.6569 3 19V4C3 2.89543 3.89543 2 5 2H21V18ZM5 16.05C5.16156 16.0172 5.32877 16 5.5 16H19V4H5V16.05ZM16 9H8V7H16V9Z">
                                            </path>
                                        </svg>
                                        <span class="w-full">
                                            <ul
                                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg flex">
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-license" type="radio"
                                                            value="" name="list-radio"
                                                            {{ $detail->kurikulum == 'K13' ? 'checked' : '' }} disabled
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-license"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                            K13
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="w-full dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-passport" type="radio"
                                                            value="" name="list-radio"
                                                            {{ $detail->kurikulum == 'IKM' ? 'checked' : '' }} disabled
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-passport"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                            IKM
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </span>
                                    </div>
                                </div>
                                <!-- Right -->
                                <div class="w-full border grid grid-cols-1 rounded-md">
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Yayasan Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z">
                                            </path>
                                        </svg>
                                        <span class="w-full">
                                            Yayasan {{ $sekolah->nama_yayasan }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Kepala Yayasan Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $detail->nama_ketua_yayasan }}
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Nomor Statisik Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $sekolah->NSS }} (NSS)
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2"
                                        title="Nomor Pokok Sekolah Nasional Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z">
                                            </path>
                                        </svg>
                                        <span class="w-full h-6">
                                            {{ $sekolah->NPSN }} (NPSN)
                                        </span>
                                    </div>
                                    <div class="inline-flex px-4 py-3 gap-x-2" title="Sertifikat BPHNU Sekolah/Madrasah">
                                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M9 4L6 2L3 4V19C3 20.6569 4.34315 22 6 22H20C21.6569 22 23 20.6569 23 19V16H21V4L18 2L15 4L12 2L9 4ZM19 16H7V19C7 19.5523 6.55228 20 6 20C5.44772 20 5 19.5523 5 19V5.07037L6 4.4037L9 6.4037L12 4.4037L15 6.4037L18 4.4037L19 5.07037V16ZM20 20H8.82929C8.93985 19.6872 9 19.3506 9 19V18H21V19C21 19.5523 20.5523 20 20 20Z">
                                            </path>
                                        </svg>
                                        <a href=""
                                            class="w-full h-6 text-blue-600 hover:text-blue-700 hover:underline">
                                            Bukti Sertifikat BPHNU.pdf
                                        </a>
                                    </div>
                                </div>
                                <!-- Chart Jumlah Guru -->
                                <div>
                                    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                                        <div class="flex justify-between items-start w-full">
                                            <div class="flex-col items-center">
                                                <div class="flex items-center mb-1">
                                                    <h5
                                                        class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">
                                                        Jumlah Guru
                                                    </h5>
                                                    <svg data-popover-target="chart-info" data-popover-placement="bottom"
                                                        class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                                                    </svg>
                                                    <div data-popover id="chart-info" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-gray-900 dark:text-white">
                                                                Activity growth -
                                                                Incremental</h3>
                                                            <p>Report helps navigate cumulative growth of community
                                                                activities. Ideally, the
                                                                chart should have a growing trend, as stagnating chart
                                                                signifies a
                                                                significant decrease of community activity.</p>
                                                            <h3 class="font-semibold text-gray-900 dark:text-white">
                                                                Calculation</h3>
                                                            <p>For each date bucket, the all-time volume of activities is
                                                                calculated. This
                                                                means that activities in period n contain all activities up
                                                                to period n,
                                                                plus the activities generated by your community in period.
                                                            </p>
                                                            <a href="#"
                                                                class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                                                                more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 6 10">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 9 4-4-4-4" />
                                                                </svg></a>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </div>
                                                <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                                                    data-dropdown-ignore-click-outside-class="datepicker" type="button"
                                                    class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">31
                                                    Nov - 31 Dev <svg class="w-3 h-3 ms-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <div id="dateRangeDropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                                                    <div class="p-3" aria-labelledby="dateRangeButton">
                                                        <div date-rangepicker datepicker-autohide
                                                            class="flex items-center">
                                                            <div class="relative">
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                                    </svg>
                                                                </div>
                                                                <input name="start" type="text"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    placeholder="Start date">
                                                            </div>
                                                            <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                                                            <div class="relative">
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                                    </svg>
                                                                </div>
                                                                <input name="end" type="text"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    placeholder="End date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end items-center">
                                                <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown"
                                                    data-dropdown-placement="bottom" type="button"
                                                    class="inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg
                                                        class="w-3.5 h-3.5 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg><span class="sr-only">Open dropdown</span>
                                                </button>
                                                <div id="widgetDropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="widgetDropdownButton">
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 21 21">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                                                </svg>Edit widget
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                                    <path
                                                                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                                </svg>Download data
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 18 18">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m5.953 7.467 6.094-2.612m.096 8.114L5.857 9.676m.305-1.192a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0ZM17 3.84a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Zm0 10.322a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Z" />
                                                                </svg>Add to repository
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 18 20">
                                                                    <path
                                                                        d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                                </svg>Delete widget
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Line Chart -->
                                        <div class="py-6" id="guru-jml"></div>

                                        <div
                                            class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                            <div class="flex justify-between items-center pt-5">
                                                <!-- Button -->
                                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                                    data-dropdown-placement="bottom"
                                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                                    type="button">
                                                    Last 7 days
                                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <div id="lastDaysdropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                7 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                30 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                90 days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#"
                                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                                    Traffic analysis
                                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chart Keadaan Guru -->
                                <div>
                                    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

                                        <div class="flex justify-between items-start w-full">
                                            <div class="flex-col items-center">
                                                <div class="flex items-center mb-1">
                                                    <h5
                                                        class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">
                                                        Keadaan Guru
                                                    </h5>
                                                    <svg data-popover-target="chart-info" data-popover-placement="bottom"
                                                        class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                                                    </svg>
                                                    <div data-popover id="chart-info" role="tooltip"
                                                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                                        <div class="p-3 space-y-2">
                                                            <h3 class="font-semibold text-gray-900 dark:text-white">
                                                                Activity growth -
                                                                Incremental</h3>
                                                            <p>Report helps navigate cumulative growth of community
                                                                activities. Ideally, the
                                                                chart should have a growing trend, as stagnating chart
                                                                signifies a
                                                                significant decrease of community activity.</p>
                                                            <h3 class="font-semibold text-gray-900 dark:text-white">
                                                                Calculation</h3>
                                                            <p>For each date bucket, the all-time volume of activities is
                                                                calculated. This
                                                                means that activities in period n contain all activities up
                                                                to period n,
                                                                plus the activities generated by your community in period.
                                                            </p>
                                                            <a href="#"
                                                                class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                                                                more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 6 10">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 9 4-4-4-4" />
                                                                </svg></a>
                                                        </div>
                                                        <div data-popper-arrow></div>
                                                    </div>
                                                </div>
                                                <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                                                    data-dropdown-ignore-click-outside-class="datepicker" type="button"
                                                    class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">31
                                                    Nov - 31 Dev <svg class="w-3 h-3 ms-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <div id="dateRangeDropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                                                    <div class="p-3" aria-labelledby="dateRangeButton">
                                                        <div date-rangepicker datepicker-autohide
                                                            class="flex items-center">
                                                            <div class="relative">
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                                    </svg>
                                                                </div>
                                                                <input name="start" type="text"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    placeholder="Start date">
                                                            </div>
                                                            <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                                                            <div class="relative">
                                                                <div
                                                                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                                    </svg>
                                                                </div>
                                                                <input name="end" type="text"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    placeholder="End date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end items-center">
                                                <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown"
                                                    data-dropdown-placement="bottom" type="button"
                                                    class="inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm"><svg
                                                        class="w-3.5 h-3.5 text-gray-800 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg><span class="sr-only">Open dropdown</span>
                                                </button>
                                                <div id="widgetDropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="widgetDropdownButton">
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 21 21">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                                                </svg>Edit widget
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                                    <path
                                                                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                                </svg>Download data
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 18 18">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m5.953 7.467 6.094-2.612m.096 8.114L5.857 9.676m.305-1.192a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0ZM17 3.84a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Zm0 10.322a2.581 2.581 0 1 1-5.162 0 2.581 2.581 0 0 1 5.162 0Z" />
                                                                </svg>Add to repository
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                                    class="w-3 h-3 me-2" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                    viewBox="0 0 18 20">
                                                                    <path
                                                                        d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                                </svg>Delete widget
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Line Chart -->
                                        <div class="py-6" id="guru-keadaan"></div>

                                        <div
                                            class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                            <div class="flex justify-between items-center pt-5">
                                                <!-- Button -->
                                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                                    data-dropdown-placement="bottom"
                                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                                    type="button">
                                                    Last 7 days
                                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <div id="lastDaysdropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                7 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                30 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                90 days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#"
                                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                                    Traffic analysis
                                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Chart Jumlah Siswa -->
                                <div class="md:col-span-2">
                                    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                                        <div
                                            class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                                            <div class="flex items-center">
                                                <div
                                                    class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 19">
                                                        <path
                                                            d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                                        <path
                                                            d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h5
                                                        class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">
                                                        Jumlah Siswa
                                                    </h5>
                                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads
                                                        generated per
                                                        week</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                                                    </svg>
                                                    42.5%
                                                </span>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-2">
                                            <dl class="flex items-center">
                                                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Money
                                                    spent:</dt>
                                                <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
                                            </dl>
                                            <dl class="flex items-center justify-end">
                                                <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">
                                                    Conversion rate:</dt>
                                                <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
                                            </dl>
                                        </div>

                                        <div id="siswa-chart"></div>
                                        <div
                                            class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                            <div class="flex justify-between items-center pt-5">
                                                <!-- Button -->
                                                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                                    data-dropdown-placement="bottom"
                                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                                    type="button">
                                                    Last 7 days
                                                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="lastDaysdropdown"
                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="dropdownDefaultButton">
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                7 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                30 days</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                                90 days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#"
                                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                                    Leads Report
                                                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </section>
@endsection
