<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <title>Document</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }
    </style>
</head>

<body class="bg-gray-100" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-gray-100' : 'hover:bg-blue-600 hover:text-gray-100' }} group">
                        <svg class="w-5 h-5 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-500' }} transition duration-75 :text-gray-400 group-hover:text-gray-100"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                @if (auth()->user()->sekolah_id == null)
                    <li>
                        <a href="{{ route('tahun-ajaran') }}"
                            class="flex items-center p-2 rounded-lg {{ request()->routeIs('tahun-ajaran') ? 'bg-blue-600 text-gray-100' : 'hover:bg-blue-600 hover:text-gray-100' }} group">
                            <svg class="w-5 h-5 {{ request()->routeIs('tahun-ajaran') ? 'text-white' : 'text-gray-500' }} transition duration-75 :text-gray-400 group-hover:text-gray-100"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20 2C21.6569 2 23 3.34315 23 5V7H21V19C21 20.6569 19.6569 22 18 22H4C2.34315 22 1 20.6569 1 19V17H17V19C17 19.5128 17.386 19.9355 17.8834 19.9933L18 20C18.5128 20 18.9355 19.614 18.9933 19.1166L19 19V15H3V5C3 3.34315 4.34315 2 6 2H20Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Tahun Ajaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pendaftaranSekolah') }}"
                            class="flex items-center p-2 rounded-lg {{ request()->routeIs('sekolah.insert') ? 'bg-blue-600 text-gray-100' : 'hover:bg-blue-600 hover:text-gray-100' }} group">
                            <svg class="w-5 h-5 {{ request()->routeIs('sekolah.insert') ? 'text-white' : 'text-gray-500' }} transition duration-75 :text-gray-400 group-hover:text-gray-100"
                                {{-- <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" --}} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M16 2L21 7V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918C3 2.44405 3.44495 2 3.9934 2H16ZM11 11H8V13H11V16H13V13H16V11H13V8H11V11Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Pendaftaran Sekolah</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('pendataanSekolah') }}"
                            class="flex items-center p-2 rounded-lg {{ request()->routeIs('pendataanSekolah') ? 'bg-blue-600 text-gray-100' : 'hover:bg-blue-600 hover:text-gray-100' }} group">
                            <svg class="w-5 h-5 {{ request()->routeIs('pendataanSekolah') ? 'text-white' : 'text-gray-500' }} transition duration-75 :text-gray-400 group-hover:text-gray-100"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20 2C20.5523 2 21 2.44772 21 3V6.757L12.0012 15.7562L11.995 19.995L16.2414 20.0012L21 15.242V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20ZM21.7782 8.80761L23.1924 10.2218L15.4142 18L13.9979 17.9979L14 16.5858L21.7782 8.80761ZM12 12H7V14H12V12ZM15 8H7V10H15V8Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Pendataan Sekolah</span>
                        </a>
                    </li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="w-full flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-600 hover:text-white group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-left">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 main-content">
        <div class="rounded-lg mt-14">
            @yield('content')
        </div>
    </div>
    <footer
        class="lg:ps-72 w-full p-4 bg-white border-t border-gray-200 shadow lg:flex lg:items-center lg:justify-end lg:p-6">
        <span class="text-sm text-gray-500 sm:text-center">
            © 2024

        </span>
    </footer>

</body>

</html>
