@props([
'heading', // 必須
'sub' => null, // 任意
])

<div class="mb-6">
    <h1 class="text-3xl font-normal text-smartfit-text-primary tracking-[1.5px] mb-2">
        {{ $heading }}
    </h1>

    @if ($sub)
    <p class="text-xl text-smartfit-text-secondary tracking-[1.5px]">
        {{ $sub }}
    </p>
    @endif
</div>