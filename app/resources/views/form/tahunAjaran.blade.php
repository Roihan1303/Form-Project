@extends('master')
@section('content')
    <section class="">
        <div class="w-full flex md:flex-row flex-col gap-x-4">
            <!-- Table Tahun Ajaran -->
            <div class="w-full px-4 py-3 bg-white rounded-lg">
                <h2 class="font-semibold text-3xl py-4">Tahun Ajaran</h2>
                <div class="flex lg:flex-row justify-end py-4">
                    <button data-modal-target="add-tahun-ajaran" data-modal-toggle="add-tahun-ajaran"
                        class="flex flex-row gap-x-2 items-center justify-center px-4 md:py-2 py-3 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="md:h-4 md:w-4 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        <span class="font-bold lg:flex hidden">
                            Tambah Tahun Ajaran
                        </span>
                    </button>
                </div>
                <div class="w-full relative overflow-hidden">
                    <table id="tables"
                        class="overflow-x-auto w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tahun Ajaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $tahun)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $tahun->tahun }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <form action="{{ route('tahunAjaran.setStatus', ['tahun' => $tahun->id]) }}"
                                            method="POST">
                                            @csrf
                                            @if ($tahun->status == 1)
                                                <button type="submit"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                    disabled>Active</button>
                                            @else
                                                <button type="submit"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Set
                                                    Active</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Main modal -->
    <div id="add-tahun-ajaran" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambahkan Tahun Ajaran Baru
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="add-tahun-ajaran">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="flex flex-col gap-y-4 items-center" action="{{ route('tahunAjaran.insert') }}"
                        method="POST">
                        @csrf
                        <div class="w-full mb-4">
                            <label for="tahun-ajaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tahun Ajaran Baru
                            </label>
                            <input type="text" name="tahun_ajaran" id="tahun-ajaran"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="2024/2025" required />
                        </div>
                        <button type="submit"
                            class="w-48 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
