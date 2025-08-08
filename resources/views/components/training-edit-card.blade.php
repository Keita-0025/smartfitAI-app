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

        <x-forms.input-group
            name="sets"
            label="セット数"
            type="number"
            :value="$sets"
            required />

        <x-forms.input-group
            name="reps"
            label="回数"
            type="number"
            :value="$reps"
            required />

        <x-forms.input-group
            name="weight"
            label="重量"
            type="number"
            :value="$weight"
            required />

    </div>
</article>