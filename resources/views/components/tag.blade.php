@props(['color' => 'default'])

@php
$classes = 'inline-flex justify-center items-center px-1.5 py-0.5 rounded-sm text-xs font-medium text-smartfit-text-primary';

$classes .= match ($color) {
'action' => ' bg-smartfit-action',
'today' => ' bg-smartfit-action',
default => ' border border-smartfit-text-primary',
};
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>