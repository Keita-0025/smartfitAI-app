@props([
'number',
'name',
'sets',
'reps',
'weight'
])

<article class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-5 flex flex-col gap-4">
    {{-- カードヘッダー：種目名と編集/削除ボタン --}}
    <header class="flex justify-between items-center">
        <div class="flex items-center gap-2 text-base font-normal tracking-[1.5px]">
            {{-- 番号アイコン --}}
            <div class="relative w-5 h-5 flex justify-center items-center">
                {{-- 背景の画像。public/images/icons/ に配置してください --}}
                <img src="{{ asset('images/icons/item-number-bg.png') }}" alt="" class="absolute w-full h-full">
                {{-- 前景の数字 --}}
                <span class="relative text-xs font-bold text-smartfit-bg">{{ $number }}</span>
            </div>
            <span>{{ $name }}</span>
        </div>
        <div class="flex items-center gap-4">
            {{-- 編集・削除ボタンのアイコンも public/images/icons/ に配置してください --}}
            <button><img src="{{ asset('images/icons/edit.svg') }}" alt="Edit"></´button>
                <button><img src="{{ asset('images/icons/delete.svg') }}" alt="Delete"></button>
        </div>
    </header>

    {{-- カードボディ：セット数、回数、重量 --}}
    <div class="flex flex-col md:flex-row justify-between gap-4">
        <div class="flex flex-col gap-1 flex-1">
            <label class="text-base font-normal tracking-[1.5px]">セット数</label>
            <div class="bg-smartfit-input-bg border-2 border-smartfit-border rounded-md px-2.5 py-2 text-sm font-semibold min-h-[32px]">{{ $sets }}</div>
        </div>
        <div class="flex flex-col gap-1 flex-1">
            <label class="text-base font-normal tracking-[1.5px]">回数</label>
            <div class="bg-smartfit-input-bg border-2 border-smartfit-border rounded-md px-2.5 py-2 text-sm font-semibold min-h-[32px]">{{ $reps }}</div>
        </div>
        <div class="flex flex-col gap-1 flex-1">
            <label class="text-base font-normal tracking-[1.5px]">重量</label>
            <div class="bg-smartfit-input-bg border-2 border-smartfit-border rounded-md px-2.5 py-2 text-sm font-semibold min-h-[32px]">{{ $weight }}</div>
        </div>
    </div>
</article>