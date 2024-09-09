@extends('master')
@section('content')
    <section>
        <div class="bg-white rounded-xl p-4 space-y-4">
            <div class="flex flex-col lg:flex-row gap-y-4 items-center justify-between">
                <form action="" class="lg:w-auto w-full mb-0">
                    <div class="flex flex-row gap-x-8">
                        <select id="" name="school"
                            class="bg-gray-50 border lg:w-64 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="0">Pilih Sekolah/Madrasah</option>
                            @foreach ($sekolah as $items)
                                <option value="{{ $items->id }}">{{ $items->nama }}</option>
                            @endforeach
                        </select>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 focus:outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <!-- no record -->
            {{-- <div class="py-12">
                <div
                    class="lg:max-w-xl lg:mx-auto mx-4 my-4 px-4 py-3 rounded-lg shadow-md hover:shadow-xl duration-300 bg-sky-100">
                    <p class="text-base font-semibold italic text-center">
                        "Harap Pilih Sekolah/Madrasah Terlebih Dahulu"
                    </p>
                </div>
            </div> --}}
            <div class="">
                <div
                    class="lg:max-w-xl lg:mx-auto mx-4 my-4 px-4 py-3 rounded-lg shadow-md hover:shadow-xl duration-300 bg-sky-100">
                    <p class="text-base font-normal">
                        Nama sekolah
                        <span class="font-semibold text-nowrap">
                            {{-- Rp {{ number_format($sum, 0, ',', '.') }} --}}
                        </span>
                    </p>
                    <p class="text-base font-normal">
                        {{-- Total Pengeluaran Bulan {{ $f }} --}}
                        <span class="font-semibold text-nowrap">
                            {{-- Rp {{ number_format($jml_keluar, 0, ',', '.') }} --}}
                            Lorem
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
