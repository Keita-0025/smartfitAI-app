@props(['padding' => 'p-6'])

<div {{ $attributes->merge(['class' => "bg-smartfit-tertiary-bg border border-smartfit-border rounded-2xl flex flex-col gap-4 {$padding}"]) }}>
    {{ $slot }}
</div>