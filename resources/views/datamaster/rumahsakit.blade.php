@extends('Templates.index')

@section('content')
    <x-title.hero-title title="Data Master" subtitle="Rumah Sakit & Penyakit" />
    <x-section.content title="Input Data Rumah Sakit">
        <x-tabs.tab>

            <x-tabs.tab-name>
                <x-tabs.tab-button tabName="Rumah Sakit" tab="tab = 1" tabId="tab === 1" />
                <x-tabs.tab-button tabName="Penyakit" tab="tab = 2" tabId="tab === 2" />
            </x-tabs.tab-name>

            <x-tabs.tab-contents>
                <x-grid.cols>
                    <x-form.input label="Nama Rumahsakit" name="rumahsakit" placeholder="Masukkan nama Rumah Sakit" />
                </x-grid.cols>
                <div class="mt-4">
                    <button type="submit"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-black px-5 py-3 text-white sm:w-auto">
                        <span class="font-medium"> Simpan Data </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </x-tabs.tab-contents>

            <x-tabs.tab-contents tab="tab === 2">
                <x-grid.cols>
                    <x-form.input label="Nama Penyakit" name="penyakit" placeholder="Masukkan Nama Penyakit" />
                </x-grid.cols>
                <div class="mt-4">
                    <button type="submit"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-black px-5 py-3 text-white sm:w-auto">
                        <span class="font-medium"> Simpan Data </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </x-tabs.tab-contents>

        </x-tabs.tab>
    </x-section.content>
@endsection
