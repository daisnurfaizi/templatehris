@props([
    'tab' => 'tab === 1',
])
<div x-show="{{ $tab }}">
    {{ $slot }}
</div>
