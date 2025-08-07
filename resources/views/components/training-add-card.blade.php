@props([
'number',
// 将来的にデフォルト値を渡せるようにプロパティを定義しておく
'exerciseName' => '',
'bodyPart' => '',
'sets' => 3,
'reps' => 10,
'weight' => 60
])

<div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4">
    {{-- formタグはカードの外側に配置するのが望ましいですが、一旦ここに残します --}}
    <div class="flex flex-col gap-4">
        <div class="flex justify-between items-center">
            <h3 class="text-base font-normal tracking-[1.5px]">トレーニング {{ $number }}</h3>
            {{-- 将来的に削除ボタンなどをここに配置可能 --}}
        </div>

        {{-- 種目名 --}}
        <x-forms.input-group
            name="trainings[{{ $number }}][name]"
            label="種目名"
            placeholder="例: ベンチプレス"
            :value="$exerciseName"
            required />

        {{-- 部位 --}}
        <x-forms.input-group
            name="trainings[{{ $number }}][part]"
            label="部位"
            placeholder="例: 胸"
            :value="$bodyPart"
            required />

        {{-- セット数 / 回数 / 重量 --}}
        <div class="flex flex-col md:flex-row gap-4 md:gap-12">
            <x-forms.input-group
                name="trainings[{{ $number }}][sets]"
                label="セット数"
                type="number"
                :value="$sets"
                required />
            <x-forms.input-group
                name="trainings[{{ $number }}][reps]"
                label="回数"
                type="number"
                :value="$reps"
                required />
            <x-forms.input-group
                name="trainings[{{ $number }}][weight]"
                label="重量（kg）"
                type="number"
                :value="$weight"
                required />
        </div>
    </div>
</div>