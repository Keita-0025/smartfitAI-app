{{-- パンくずリストのテキストを$slotで受け取る --}}
<div {{ $attributes->merge(['class' => 'flex items-center gap-1 text-xs font-medium text-white']) }}>
    <img src="{{ asset('images/111_4496.svg') }}" alt="Breadcrumb Icon">
    <span>| {{ $slot }}</span>
</div>