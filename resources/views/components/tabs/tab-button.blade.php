@props([
    'tabName' => 'tabName',
    'tab' => 'tab = 1',
    'tabId' => 'tab === 1',
])
<button type="button"
    class="focus:outline-none text-gray-400 hover:text-gray-500 py-2 px-1 border-t-2 text-sm tracking-wide font-medium border-transparent"
    x-on:click="{{ $tab }}"
    :class="{ 'text-gray-700 border-indigo-500': {{ $tabId }} }">{{ $tabName }}</button>
