@props(['active', 'icon'])

@php
$classes = ($active ?? false)
? 'flex items-center gap-5 px-4 py-2 rounded-md tracking-[1.5px] bg-smartfit-action-light text-smartfit-text-primary'
: 'flex items-center gap-5 px-4 py-2 rounded-md tracking-[1.5px] text-smartfit-text-primary hover:bg-smartfit-border';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @isset($icon)
    <img src="{{ $icon }}" alt="" class="w-5 h-5">
    @endisset
    <span>{{ $slot }}</span>
</a>