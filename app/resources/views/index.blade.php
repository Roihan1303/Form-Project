<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Form Project</title>
</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif;">
    <section class="bg-gradient-to-br from-emerald-800 to-cyan-700 h-screen flex items-center">
        <!-- Sign In -->
        <div class="flex md:flex-row w-full md:max-w-6xl mx-auto md:h-screen md:py-20 md:px-0 px-4" id="sign-in">
            <div class="bg-white w-1/2 rounded-s-xl p-4 md:flex hidden justify-center items-center">
                <div class="bg-slate-200 w-full h-full rounded-lg flex md:flex-col gap-y-4 none">
                    <img class="md:h-[28rem]" src="{{ asset('assets/img/login.svg') }}" alt="">
                    <div class="bg-white md:w-full md:max-w-md mx-auto rounded-lg px-4 py-3">
                        <p class="font-semibold">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, itaque.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="md:w-1/2 md:h-full flex flex-col items-center justify-center bg-white md:rounded-e-xl md:rounded-none rounded-xl md:px-4">
                <p
                    class="flex items-center md:mb-6 px-4 md:py-2 py-4 text-2xl font-semibold text-gray-900 text-center none-right">
                    Pendataan Sekolah/Madrasah LP Ma'arif NU
                    Kota Malang
                    2024
                </p>
                <div class="w-full rounded-lg md:mt-0 sm:max-w-xl none-right">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div>
                                <label for="log-email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Email Address
                                </label>
                                <input type="text" name="email" id="log-email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukkan Email Anda" required>
                            </div>
                            <div>
                                <label for="log-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="log-password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            {{-- <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                    Forgot password?
                                </a>
                            </div> --}}
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Sign in
                            </button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet?
                                <span class="font-medium text-blue-600 hover:underline cursor-pointer" id="signing-up">
                                    Sign up
                                </span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up -->
        <div class="flex sm:flex-row w-full md:max-w-6xl mx-auto md:h-screen md:py-20 md:px-0 px-4 hidden"
            id="sign-up">
            <div
                class="md:w-1/2 flex flex-col items-center justify-center bg-white md:rounded-s-xl md:rounded-none rounded-xl">
                <p
                    class="flex items-center md:mb-6 px-4 md:py-2 py-4 text-2xl font-semibold text-gray-900 text-center none-right">
                    Pendataan Sekolah/Madrasah LP Ma'arif NU
                    Kota Malang
                    2024
                </p>
                <div class="w-full rounded-lg md:mt-0 sm:max-w-xl none">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign up here!
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div>
                                <label for="repeat-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat Your
                                    Password</label>
                                <input type="password" name="password" id="repeat-password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Sign up
                            </button>
                            {{-- <a href="{{ route('sekolah.insert') }}"
                                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                                in
                            </a> --}}
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account?
                                <span class="font-medium text-blue-600 hover:underline cursor-pointer" id="signing-in">
                                    Sign in here
                                </span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white w-1/2 rounded-e-xl p-4 md:flex hidden justify-center items-center">
                <div class="bg-slate-200 w-full h-full rounded-lg flex md:flex-col gap-y-4 none-right">
                    <img class="md:h-[28rem]" src="{{ asset('assets/img/register.svg') }}" alt="">
                    <div class="bg-white md:w-full md:max-w-md mx-auto rounded-lg px-4 py-3">
                        <p class="font-semibold">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, itaque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signInBtn = document.getElementById('signing-in');
            const signUpBtn = document.getElementById('signing-up');
            const formSignIn = document.getElementById('sign-in');
            const formSignUp = document.getElementById('sign-up');

            signInBtn.addEventListener('click', function() {
                formSignUp.classList.add('hidden');
                formSignIn.classList.remove('hidden');
            });

            signUpBtn.addEventListener('click', function() {
                formSignIn.classList.add('hidden');
                formSignUp.classList.remove('hidden');
            });
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success",
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error",
            });
        </script>
    @endif
</body>

</html>
