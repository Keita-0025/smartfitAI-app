{{-- resources/views/dashboard.blade.php --}}

<x-app-layout>
    <div class="flex min-h-screen bg-smartfit-black text-smartfit-text-primary">


        <!-- =============================================== -->
        <!-- メインコンテンツ (Main)                          -->
        <!-- =============================================== -->
        <main class="flex-grow p-6 md:p-10 lg:p-12 flex flex-col gap-6 overflow-y-auto">

            <!-- あいさつ -->
            <section>
                <div class="flex items-center gap-1 mb-4">
                    <img src="{{ asset('images/105_3685.svg') }}" alt="Icon">
                    <span>|</span>
                </div>
                <h1 class="text-3xl font-normal tracking-[1.5px] mb-2">こんにちは、ゲストユーザーさん</h1>
                <p class="text-xl font-normal tracking-[1.5px]">昨日の自分を超えよう！！</p>
            </section>

            <!-- 本日のメニュー -->
            <section class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-2xl p-6 flex flex-col items-center gap-4">
                <div class="w-full flex justify-between items-center">
                    <div class="flex items-center gap-1">
                        <img src="{{ asset('images/I106_3763_67_3627_35_197_30_498.svg') }}" alt="Menu Icon">
                        <h2 class="text-xl font-normal tracking-[1.5px]">本日のメニュー</h2>
                    </div>
                    <a href="#" class="flex items-center gap-1 text-smartfit-link tracking-[1.5px]">
                        <span>週間</span>
                        <img src="{{ asset('images/106_3767.svg') }}" alt="Arrow Icon" class="transform rotate-90">
                    </a>
                </div>

                <div class="w-full flex flex-col gap-4">
                    <div class="flex items-center gap-1 text-base tracking-[1.5px]">
                        <img src="{{ asset('images/I235_5193_67_3627_35_197_235_5104.svg') }}" alt="Check Icon">
                        <span>進捗: ◯/4 種目完了</span>
                    </div>
                    <div class="flex items-center gap-4 w-full">
                        <div class="flex-grow h-1.5 bg-smartfit-border rounded-full">
                            <div class="h-full bg-smartfit-link rounded-full" style="width: 50%;"></div>
                        </div>
                        <span class="text-sm font-bold">◯%</span>
                    </div>
                </div>

                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <!-- トレーニングカード -->
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4 flex items-center gap-2">
                        <img src="{{ asset('images/I235_5229_35_197.svg') }}" alt="Status Icon">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-base tracking-[1.5px]">スクワット</span>
                                <span class="border border-smartfit-text-primary rounded-sm px-1 text-xs font-medium leading-tight">脚</span>
                            </div>
                            <span class="text-smartfit-text-emphasis text-xs font-medium">4セット 8-10回 × 60kg</span>
                        </div>
                    </div>
                    <!-- 他のトレーニングカードも同様に続ける -->
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4 flex items-center gap-2">
                        <img src="{{ asset('images/I235_5238_35_197.svg') }}" alt="Status Icon">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-base tracking-[1.5px]">ルーマニアンデットリフト</span>
                                <span class="border border-smartfit-text-primary rounded-sm px-1 text-xs font-medium leading-tight">脚</span>
                            </div>
                            <span class="text-smartfit-text-emphasis text-xs font-medium">3セット 10-12回 × 60kg</span>
                        </div>
                    </div>
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4 flex items-center gap-2">
                        <img src="{{ asset('images/I235_5242_35_197.svg') }}" alt="Status Icon">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-base tracking-[1.5px]">ブルガリアンスクワット</span>
                                <span class="border border-smartfit-text-primary rounded-sm px-1 text-xs font-medium leading-tight">脚</span>
                            </div>
                            <span class="text-smartfit-text-emphasis text-xs font-medium">3セット 8-10回 × 50kg</span>
                        </div>
                    </div>
                    <div class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-lg p-4 flex items-center gap-2">
                        <img src="{{ asset('images/I235_5246_35_197.svg') }}" alt="Status Icon">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-base tracking-[1.5px]">レッグプレス</span>
                                <span class="border border-smartfit-text-primary rounded-sm px-1 text-xs font-medium leading-tight">脚</span>
                            </div>
                            <span class="text-smartfit-text-emphasis text-xs font-medium">4セット 12-15回 × 120kg</span>
                        </div>
                    </div>
                </div>

                <button class="w-9 h-9 flex justify-center items-center border border-smartfit-text-primary rounded-full">
                    <img src="{{ asset('images/225_11657.svg') }}" alt="Add Icon">
                </button>
            </section>

            <!-- 統計 -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-smartfit-tertiary-bg border-2 border-smartfit-border rounded-2xl p-6 flex justify-between items-center">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-normal tracking-[1.5px]">今月のトレーニング日数</h3>
                        <p class="text-xl font-bold tracking-[1.5px]">14日</p>
                        <p class="text-xs font-normal tracking-[1.5px]">前月比 -1回</p>
                    </div>
                    <img src="{{ asset('images/I225_11663_59_2048.svg') }}" alt="Training days icon" class="w-10 h-auto">
                </div>
                <div class="bg-smartfit-tertiary-bg border-2 border-smartfit-border rounded-2xl p-6 flex justify-between items-center">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-normal tracking-[1.5px]">週平均頻度</h3>
                        <p class="text-xl font-bold tracking-[1.5px]">3回</p>
                        <p class="text-xs font-normal tracking-[1.5px]">前月比 -1日</p>
                    </div>
                    <img src="{{ asset('images/I225_11671_59_2048.svg') }}" alt="Frequency icon" class="w-10 h-auto">
                </div>
            </section>

            <!-- カレンダー -->
            <section class="bg-smartfit-tertiary-bg border border-smartfit-border rounded-2xl p-6 flex flex-col gap-4">
                <div class="px-4 flex justify-between items-center">
                    <div class="flex items-center gap-1 text-xl font-normal tracking-[1.5px]">
                        <img src="{{ asset('images/225_11863.svg') }}" alt="Calendar Icon">
                        <span>1月</span>
                    </div>
                    <a href="#" class="flex items-center gap-1 text-smartfit-link text-xl tracking-[1.5px]">
                        <span>年間</span>
                        <img src="{{ asset('images/225_12912.svg') }}" alt="Arrow Icon" class="transform rotate-90">
                    </a>
                </div>
                <div class="py-2 border-y border-smartfit-border">
                    <div class="grid grid-cols-7 gap-2 mb-2">
                        <div class="text-center text-base">日</div>
                        <div class="text-center text-base">月</div>
                        <div class="text-center text-base">火</div>
                        <div class="text-center text-base">水</div>
                        <div class="text-center text-base">木</div>
                        <div class="text-center text-base">金</div>
                        <div class="text-center text-base">土</div>
                    </div>
                    <div class="grid grid-cols-7 gap-2 text-xl font-normal">

                        <div class="day-cell"></div>
                        <div class="day-cell"></div>
                        <div class="day-cell">1</div>
                        <div class="day-cell">2</div>
                        <div class="day-cell">3</div>
                        <div class="day-cell">4</div>
                        <div class="day-cell">5</div>
                        <div class="day-cell">6</div>
                        <div class="day-cell">7</div>
                        <div class="day-cell">8</div>
                        <div class="day-cell">9</div>
                        <div class="day-cell">10</div>
                        <div class="day-cell">11</div>
                        <div class="day-cell">12</div>
                        <div class="day-cell">13</div>
                        <div class="day-cell">14</div>
                        <div class="day-cell">15</div>
                        <div class="day-cell">16</div>
                        <div class="day-cell">17</div>
                        <div class="day-cell">18</div>
                        <div class="day-cell">19</div>
                        <div class="day-cell">20</div>
                        <div class="day-cell">21</div>
                        <div class="day-cell">22</div>
                        <div class="day-cell">23</div>
                        <div class="day-cell">24</div>
                        <div class="day-cell">25</div>
                        <div class="day-cell">26</div>
                        <div class="day-cell">27</div>
                        <div class="day-cell">28</div>
                        <div class="day-cell">29</div>
                        <div class="day-cell">30</div>
                        <div class="day-cell">31</div>
                    </div>
                </div>
                <div class="pr-4 flex justify-end items-center gap-8">
                    <div class="text-right text-xl tracking-[1.5px] text-smartfit-text-secondary">
                        <p>日数</p>
                        <p>週平均</p>
                    </div>
                    <div class="text-left text-xl tracking-[1.5px]">
                        <p>11日</p>
                        <p>2.6日/週</p>
                    </div>
                </div>
            </section>
        </main>

    </div>
</x-app-layout>

{{-- カレンダーの日付セル用にCSSを少し追加すると便利です --}}
@push('styles')
<style>
    .day-cell {
        @apply aspect-square flex items-center justify-center border border-smartfit-border rounded-md;
    }
</style>
@endpush