@props(['label' => 'Label', 'name' => 'name', 'placeholder' => 'Masukkan nama siswa', 'type' => 'text'])
<div class="rounded-lg hover:border-blue-500 focus:border-blue-600">
    <label class="block text-gray-700 font-medium mb-2" for="nama">{{ $label }}</label>
    <textarea class="border-2 p-2 rounded-lg w-full" type="{{ $type }}" id="{{ $name }}"
        name="{{ $name }}" placeholder="{{ $placeholder }}"></textarea>
</div>
