@extends('Templates.index')

@section('content')
    <x-title.hero-title title="Data Master" subtitle="Lembaga Dan Pendidikan" />
    <x-section.content title="Input Data Lembaga Pendidikan">
        <x-grid.cols>

            <x-form.input label="Nama Lembaga Pendidikan" name="nama_lembaga" placeholder="Masukkan nama lembaga" />

        </x-grid.cols>
        <div class="mt-4">
            <button type="submit"
                class="inline-flex w-full items-center justify-center rounded-lg bg-black px-5 py-3 text-white sm:w-auto">
                <span class="font-medium"> Simpan Data </span>

                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </x-section.content>

    <x-section.content title="Input Data Jurusan">
        <x-grid.cols>
            <x-form.input label="Nama Jurusan" name="jurusan" placeholder="Masukkan Jurusan" />

        </x-grid.cols>
        <div class="mt-4">
            <button type="submit"
                class="inline-flex w-full items-center justify-center rounded-lg bg-black px-5 py-3 text-white sm:w-auto">
                <span class="font-medium"> Simpan Data </span>

                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </x-section.content>
@endsection
