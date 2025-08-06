@props([
'icon',
'day',
'isToday' => false // デフォルトはfalse（「今日」タグ非表示）
])

<div class="flex justify-between items-center mb-6">
    <div class="flex items-center gap-2">
        <img src="{{ $icon }}" alt="Calendar icon">
        <h2 class="text-xl font-normal text-smartfit-text-primary tracking-[1.5px]">{{ $day }}</h2>

        {{-- isTodayプロパティがtrueの場合のみ「今日」タグを表示 --}}
        @if ($isToday)
        <x-tag color="today">今日</x-tag>
        @endif
    </div>
    <div class="flex items-center gap-2">
        <x-tag>AIトレーナー</x-tag>
        <x-tag color="action" :href="route('training')">編集</x-tag>
    </div>
</div>