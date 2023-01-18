@props(['title' => 'Title', 'subtitle' => 'SubTitle'])
<section class="grid md:grid-cols-1 xl:grid-cols-1 xl:grid-rows-1 xl:grid-flow-col gap-6">
    <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
        <div class="px-6 py-5 font-semibold border-b border-gray-100">{{ $title }}</div>
        <div class="p-4 flex-grow">
            {{ $slot }}
        </div>
    </div>
</section>
