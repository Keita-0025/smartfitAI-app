<x-app-layout>
    {{-- メインコンテンツ --}}
    <div class="flex flex-col gap-6">

        <!-- ページヘッダー -->
        <header class="flex flex-col gap-4">
            <x-breadcrumb>
                ダッシュボード / トレーニング記録
            </x-breadcrumb>
            <div class="flex flex-col items-start gap-4">
                <x-back-to-dashboard-button />
                <h1 class="text-3xl font-normal tracking-[1.5px]">トレーニングを編集</h1>
            </div>
        </header>

        <!-- トレーニングサマリーカード -->
        <x-card padding="px-4 py-6" class="flex-col md:flex-row justify-between items-start md:items-center">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/icons/calendar.svg') }}" alt="Calendar icon" class="w-5 h-5">
                <span class="text-xl font-normal tracking-[1.5px]">2025年7月19日</span>
            </div>
            <div class="flex items-center gap-8 md:gap-14 text-base tracking-[1.5px]">
                <p>種目数: <span class="font-bold text-smartfit-link">3</span></p>
                <p>総セット数: <span class="font-bold text-smartfit-link">10</span></p>
            </div>
        </x-card>

        <!-- トレーニングログカード -->
        <x-card padding="p-5" class="gap-6">
            <h2 class="text-xl font-normal tracking-[1.5px]">2025年7月19日のトレーニング記録</h2>
            <div class="flex flex-col gap-6">
                {{-- 新しく作成したコンポーネントを呼び出す --}}
                <x-training-edit-card number="1" name="ベンチプレス" sets="3セット" reps="10回" weight="60kg" />
                <x-training-edit-card number="2" name="スクワット" sets="4セット" reps="12回" weight="80kg" />
                <x-training-edit-card number="3" name="デッドリフト" sets="3セット" reps="8回" weight="70kg" />
            </div>
        </x-card>

        <!-- 新しい種目を追加カード -->
        <x-card class="items-center justify-center text-center">
            <h3 class="text-xl font-normal tracking-[1.5px] text-white">新しい種目を追加</h3>
            <p class="text-xs font-normal tracking-[1.5px] text-smartfit-text-secondary mb-2">トレーニング記録ページで新しい種目を追加できます</p>
            <button class="inline-flex items-center justify-center gap-2 bg-smartfit-action text-smartfit-text-primary px-2.5 py-1 rounded-md text-xs font-normal tracking-[1.5px]">
                <img src="{{ asset('images/icons/add.svg') }}" alt="Add icon">
                <span>種目を追加する</span>
            </button>
        </x-card>

    </div>
</x-app-layout>