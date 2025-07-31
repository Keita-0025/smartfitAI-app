<x-app-layout>
    {{-- メインコンテンツ --}}
    <div class="flex flex-col gap-10">
        <!-- ページヘッダー -->
        <x-page-header>
            ダッシュボード / 週間メニュー
        </x-page-header>

        <!-- コンテンツタイトル -->
        <x-page-title heading="週間メニュー" sub="AIトレーナーが提案した今週のトレーニングメニュー" />

        <!-- スケジュールグリッド -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-7">

            {{-- 月曜日のスケジュールカード --}}
            <x-card>
                {{-- 曜日ヘッダーコンポーネント --}}
                <x-schedule-card-header
                    day="月曜日"
                    :icon="asset('images/I225_12728_67_3627.svg')" />

                {{-- 運動リストコンポーネント（中身はハードコーディング） --}}
                <x-exercise-list>
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-base font-normal text-smartfit-text-primary tracking-[1.5px]">ベンチプレス</h3>
                            <span class="bg-smartfit-muscle-tag-bg border border-smartfit-text-primary rounded-sm px-1 text-xs leading-tight h-[18px]">胸</span>
                        </div>
                        <p class="text-xs font-medium text-smartfit-text-emphasis">3セット 8-10回 × 60kg</p>
                    </div>
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-base font-normal text-smartfit-text-primary tracking-[1.5px]">インクラインプレス</h3>
                            <span class="bg-smartfit-muscle-tag-bg border border-smartfit-text-primary rounded-sm px-1 text-xs leading-tight h-[18px]">胸</span>
                        </div>
                        <p class="text-xs font-medium text-smartfit-text-emphasis">3セット 10-12回 × 50kg</p>
                    </div>
                    {{-- ... 他の種目も同様に追加 ... --}}
                </x-exercise-list>
            </x-card>

            {{-- 火曜日のスケジュールカード (今日) --}}
            <x-card class="bg-smartfit-today-bg border-smartfit-action">
                {{-- 曜日ヘッダーコンポーネント (is-todayをtrueで渡す) --}}
                <x-schedule-card-header
                    day="火曜日"
                    :icon="asset('images/I225_12805_67_3627.svg')"
                    :is-today="true" />

                {{-- 運動リストコンポーネント（中身はハードコーディング） --}}
                <x-exercise-list>
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-base font-normal text-smartfit-text-primary tracking-[1.5px]">スクワット</h3>
                            <span class="bg-smartfit-muscle-tag-bg border border-smartfit-text-primary rounded-sm px-1 text-xs leading-tight h-[18px]">脚</span>
                        </div>
                        <p class="text-xs font-medium text-smartfit-text-emphasis">4セット 8-10回 × 60kg</p>
                    </div>
                    {{-- ... 他の種目も同様に追加 ... --}}
                </x-exercise-list>
            </x-card>

            {{-- ... 以下、水曜日から日曜日のカードを同様に作成 ... --}}

        </div>
    </div>
</x-app-layout>