@extends('Templates.index')

@section('content')
    <x-title.hero-title title="Data Master" subtitle="Perusahaan" />
    <x-section.content title="Input Data Perusahaan">
        <x-grid.cols>
            <x-form.input label="Nama Perusahaan" name="nama" placeholder="Masukkan nama perusahaan" />
            <x-form.input label="Nama Alias" name="alias" placeholder="Masukkan Alias Perusahaan" />
            <x-form.input label="No. Akte Pendirian" name="akte" placeholder="No. Akte Pendirian" />
            <x-form.text-area label="Alamat" name="alamat" placeholder="Masukkan alamat perusahaan" />
            <x-form.input label="Tgl. Akte Pendirian" name="tgl_akte" placeholder="Tgl. Akte Pendirian" type="date" />
            <x-form.input label="N.P.W.P" name="npwp" placeholder="Npwp" />
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
        </x-grid.cols>
    </x-section.content>
@endsection
