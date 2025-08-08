@props([
'icon' => null, // アイコンのパス。デフォルトはnull（非表示）
'type' => 'submit' // デフォルトはsubmitボタン
])

<button
    type="{{ $type }}"
    {{-- text-sm, px-6, py-2 など、Tailwindのクラスが良い感じにサイズを調整してくれます --}}
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center gap-2 bg-smartfit-action text-smartfit-text-primary font-semibold text-sm py-2 px-6 rounded-md hover:opacity-90 transition-opacity']) }}>
    {{-- iconプロパティが指定されている場合のみ、imgタグを表示 --}}
    @if ($icon)
    <img src="{{ $icon }}" alt="" class="w-4 h-4 flex-shrink-0">
    @endif

    <span>
        {{ $slot }}
    </span>
</button>