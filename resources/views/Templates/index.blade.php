<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>

<body class="flex bg-gray-100 min-h-screen" x-data="{ panel: false, menu: true }">
    <aside class="flex flex-col" :class="{ 'hidden sm:flex sm:flex-col': window.outerWidth > 768 }">
        <a href="#"
            class="inline-flex items-center justify-center h-20 w-full bg-blue-600 hover:bg-blue-500 focus:bg-blue-500">


            <svg class="h-12 w-12 text-white" fill="currentColor" version="1.1" viewBox="0 0 215 215" stroke="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:osb="http://www.openswatchbook.org/uri/2009/osb"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                <title>Company logo</title>
                <path transform="matrix(1.28 0 0 1.28 13.057 10.462)"
                    d="m121.65 15.95-11.2 11.2q-5.9-4.75-12.8-7.3-5.7-2.35-10.05-3.15v-16.7h-22.8v16.35l-6.9 1.75q-8.1 2.55-16.15 7.5l-11.6-11.65-15.95 15.75 11.8 11.65q-6.1 8.85-8.85 19.65l-0.8 4.55h-16.35v21.65h16.75l2.15 7.45q2.35 7.9 7.3 14.4l-12 11.6 15.35 15.35 12-11.8 6.5 3.95q8.85 4.3 16.75 5.7v16.15h22.8v-16.55q8.05-1.8 15.75-5.7l5.55-3.35 11.4 11.4 16.15-16.15-11.25-11.4q5.1-7.85 7.5-16.9l1.2-4.15h16.1v-21.65h-15.75q-1.55-8.5-4.5-15.35l-3.55-5.9 12-12.05-16.55-16.3m-7.65 58.85q-0.05 15.9-11.25 27.55-11.6 11-27.55 11-16.15 0-27.55-11.4-11.2-10.85-11.2-27.15 0-15.95 11.2-27.55 11.8-11.25 27.55-11.25 15.75 0 27.55 11.25 11.2 11.8 11.25 27.55"
                    stroke-linecap="square" stroke-width="1" />
                <path transform="matrix(.34872 0 0 .34872 83.818 78.7)"
                    d="m144.75 65.137-94.088 94.088-50.662-50.663v-65.138l50.662 50.663 94.088-94.088v65.137"
                    stroke-linecap="square" stroke-width="6" />
            </svg>
            <span class="text-white text-4xl ml-2" x-show="menu">Tempo </span>
        </a>
        {{-- sidebar --}}
        <x-side-bar.side-bar>
            <x-side-bar.menu title="Dashboard">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
            </x-side-bar.menu>
            <x-side-bar.menu title="Pages">
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </x-side-bar.menu>
            <x-side-bar.menu-extended title="Master Data">
                <x-side-bar.menu title="Perusahaan" href="{{ route('datamaster.perusahaan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Entitas" href="{{ route('datamaster.perusahaan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Golongan" href="{{ route('datamaster.perusahaan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Kompnen Gaji" href="{{ route('datamaster.perusahaan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Premi Asuransi" href="{{ route('datamaster.perusahaan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Lembaga Pendidikan" href="{{ route('datamaster.lembagapendidikan') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Bank & cabang" href="{{ route('datamaster.bank') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
                <x-side-bar.menu title="Rumah Sakit" href="{{ route('datamaster.rumahsakit') }}">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </x-side-bar.menu>
            </x-side-bar.menu-extended>
            <x-side-bar.menu-extended />
        </x-side-bar.side-bar>
        {{-- end sidebar --}}
    </aside>
    <div class="flex-grow text-gray-800">
        {{-- navbar --}}
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <div class="mr-8 cursor-pointer" @click="menu = !menu">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <div class="relative w-full max-w-md sm:-ml-2">
                <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                    class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
                <input type="text" role="search" placeholder="Search..."
                    class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg" />
            </div>
            <div class="flex flex-shrink-0 items-center ml-auto">
                <button class="relative inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg"
                    @click="panel = !panel" @click.away="panel = false">
                    <span class="sr-only">User Menu</span>
                    <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                        <span class="font-semibold">Nama User</span>
                        <span class="text-sm text-gray-600"></span>
                    </div>
                    <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="user profile photo"
                            class="h-full w-full object-cover">
                    </span>
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                        class="hidden sm:block h-6 w-6 text-gray-300">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="absolute top-20 bg-white border rounded-md p-2 w-56" x-show="panel" style="display:none">
                    <div class="p-2 hover:bg-blue-100 cursor-pointer">Profile</div>
                    <div class="p-2 hover:bg-blue-100 cursor-pointer">Messages</div>
                    <div class="p-2 hover:bg-blue-100 cursor-pointer">To-Do's</div>
                </div>
                <div class="border-l pl-3 ml-3 space-x-1">
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Notifications</span>
                        <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                        <span
                            class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Log out</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        {{-- end navbar --}}
        <main class="p-6 sm:p-10 space-y-6">
            {{-- content --}}
            @yield('content')



        </main>
    </div>
</body>
<!-- Styles -->
{{-- <script src="{{ asset('js/main.js') }}" defer></script> --}}

</body>

</html>
