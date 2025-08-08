@props([
'name',
'label',
'type' => 'text',
'value' => '',
'placeholder' => '',
'required' => false,
'width' => 'flex-1' // デフォルトは可変幅
])

<div class="{{ $width }}">
    <label for="{{ $name }}" class="text-base font-normal tracking-[1.5px] block mb-1">
        {{ $label }}
        @if($required)
        <span class="text-smartfit-action">*</span>
        @endif
    </label>

    {{-- divのラップをなくし、inputに直接スタイルを適用 --}}
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        {{-- class属性をここに集約 --}}
        {{ $attributes->merge(['class' => 'w-full h-8 bg-smartfit-input-bg border-2 border-smartfit-border rounded-md px-2.5 text-sm font-semibold text-white placeholder:text-smartfit-text-secondary focus:border-smartfit-link focus:ring-1 focus:ring-smartfit-link focus:outline-none']) }}>

    @error($name)
    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>