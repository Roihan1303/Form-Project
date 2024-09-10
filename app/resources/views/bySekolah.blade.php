@extends('master')
@section('content')
    <section>
        <section class="mb-4 w-fit">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ route('jenjang') }}"
                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                                SD/MI
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                SD Malang 1
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </section>
    </section>
    <section>
        <div class="w-full bg-white rounded-lg px-4 py-3">
            <h2 class="font-semibold md:text-3xl md:ps-4 mb-4">
                SD Malang 1
                <span class="px-4">
                    -
                </span>
                <span class="">
                    Akreditasi A
                </span>
            </h2>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                <div class="w-full border grid grid-cols-1 rounded-sm">
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Alamat Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                            </path>
                        </svg>
                        <span class="w-full">
                            JL HASANUDIN VIII NO 28 PESANGGRAHAN BATU KOTA BATU JAWA TIMUR
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="No Telepon Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            08249131842123
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Tanggal Berdidi Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 11H8V13H6V11ZM11 11H13V13H11V11ZM16 11H18V13H16V11Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            12-12-2020
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Kepala Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            Abah Zaidan Karim Aljaber
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Jam Belajar Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            Pagi
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2 items-center" title="Kurikulum Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M21 18H6C5.44772 18 5 18.4477 5 19C5 19.5523 5.44772 20 6 20H21V22H6C4.34315 22 3 20.6569 3 19V4C3 2.89543 3.89543 2 5 2H21V18ZM5 16.05C5.16156 16.0172 5.32877 16 5.5 16H19V4H5V16.05ZM16 9H8V7H16V9Z">
                            </path>
                        </svg>
                        <span class="w-full">
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg flex">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="" checked
                                            name="list-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            K13
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-passport" type="radio" value=""
                                            name="list-radio"
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
                <div class="w-full border grid grid-cols-1 rounded-sm">
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Yayasan Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z">
                            </path>
                        </svg>
                        <span class="w-full">
                            Yayasan Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, in.
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Kepala Yayasan Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            Abah Zaidan Karim Aljaber
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Nomor Statisik Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            032543634 (NSS)
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Nomor Pokok Sekolah Nasional Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M13.0607 8.11097L14.4749 9.52518C17.2086 12.2589 17.2086 16.691 14.4749 19.4247L14.1214 19.7782C11.3877 22.5119 6.95555 22.5119 4.22188 19.7782C1.48821 17.0446 1.48821 12.6124 4.22188 9.87874L5.6361 11.293C3.68348 13.2456 3.68348 16.4114 5.6361 18.364C7.58872 20.3166 10.7545 20.3166 12.7072 18.364L13.0607 18.0105C15.0133 16.0578 15.0133 12.892 13.0607 10.9394L11.6465 9.52518L13.0607 8.11097ZM19.7782 14.1214L18.364 12.7072C20.3166 10.7545 20.3166 7.58872 18.364 5.6361C16.4114 3.68348 13.2456 3.68348 11.293 5.6361L10.9394 5.98965C8.98678 7.94227 8.98678 11.1081 10.9394 13.0607L12.3536 14.4749L10.9394 15.8891L9.52518 14.4749C6.79151 11.7413 6.79151 7.30911 9.52518 4.57544L9.87874 4.22188C12.6124 1.48821 17.0446 1.48821 19.7782 4.22188C22.5119 6.95555 22.5119 11.3877 19.7782 14.1214Z">
                            </path>
                        </svg>
                        <span class="w-full h-6">
                            112345263312496 (NPSN)
                        </span>
                    </div>
                    <div class="inline-flex px-4 py-3 gap-x-2" title="Sertifikat BPHNU Sekolah/Madrasah">
                        <svg class="w-6 h-6 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M9 4L6 2L3 4V19C3 20.6569 4.34315 22 6 22H20C21.6569 22 23 20.6569 23 19V16H21V4L18 2L15 4L12 2L9 4ZM19 16H7V19C7 19.5523 6.55228 20 6 20C5.44772 20 5 19.5523 5 19V5.07037L6 4.4037L9 6.4037L12 4.4037L15 6.4037L18 4.4037L19 5.07037V16ZM20 20H8.82929C8.93985 19.6872 9 19.3506 9 19V18H21V19C21 19.5523 20.5523 20 20 20Z">
                            </path>
                        </svg>
                        <a href="" class="w-full h-6 text-blue-600 hover:text-blue-700 hover:underline">
                            Bukti Sertifikat BPHNU.pdf
                        </a>
                    </div>
                </div>
                <div>
                    chart jumlah guru
                </div>
                <div>
                    chart keadaan guru
                </div>
                <div class="md:col-span-2">
                    chart siswa
                </div>
            </div>
        </div>
    </section>
@endsection
