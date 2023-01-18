@props([
    'propName' => 'tab',
    'propValue' => 1,
    'tabId' => 'tab-1',
    'tabName' => 'Tab 1',
    'tabContent' => 'Tab Content 1',
])

<div x-data="{ tab: 1 }" x-cloak class="antialiased">
    <div class="relative flex flex-col rounded-lg shadow-xs overflow-hidden">
        {{ $slot }}
    </div>
</div>
</div>
