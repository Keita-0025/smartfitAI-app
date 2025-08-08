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
            {{-- formタグで全体を囲み、CSRFトークンを追加 --}}
            <form action="#" method="POST">
                @csrf
                @method('PUT') {{-- 更新処理なのでPUT/PATCHが適切 --}}

                <h2 class="text-xl font-normal tracking-[1.5px] mb-6">2025年7月19日のトレーニング記録</h2>

                <div class="flex flex-col gap-6">
                    {{-- 新しく作成したコンポーネントを呼び出す (単位を削除し数値のみ渡す) --}}
                    <x-training-edit-card number="1" name="ベンチプレス" sets="3" reps="10" weight="60" />
                    <x-training-edit-card number="2" name="スクワット" sets="4" reps="12" weight="80" />
                    <x-training-edit-card number="3" name="デッドリフト" sets="3" reps="8" weight="70" />
                </div>

                <!-- 編集を保存するボタン -->
                <div class="flex justify-center mt-6">
                    {{-- アイコンとテキストを含むボタン --}}
                    <x-primary-button class="max-w-xs">
                        <img src="{{ asset('images/icons/add-training.svg') }}" alt="Add icon" class="w-5 h-5">
                        <span>変更を保存する</span>
                    </x-primary-button>
                </div>

            </form>
        </x-card>

        <x-card class="flex flex-col">

            <!-- トレーニングリストコンテナ -->

            <h2 class="text-xl font-normal tracking-[1.5px]">トレーニングを追加</h2>

            {{-- 新しく作成したフォームカードコンポーネントを呼び出す --}}
            <x-training-add-card number="1" />

            {{-- ここに2つ目以降のフォームが動的に追加されることを想定 --}}

            <!-- 新しい種目を追加ボタン -->
            <x-primary-button class="self-center w-full max-w-xs">
                <img src="{{ asset('images/icons/add-training.svg') }}" alt="Add icon" class="w-5 h-5">
                <span>新しい種目を追加</span>
            </x-primary-button>
            </button>

        </x-card>



    </div>
</x-app-layout>