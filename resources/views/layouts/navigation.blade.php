<aside class="w-[272px] bg-smartfit-bg p-5 flex-col flex-shrink-0 hidden lg:flex">
    <div class="flex flex-col h-full">
        <!-- ロゴセクション -->
        <div class="pb-2 border-b border-smartfit-border-light">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-4 text-white no-underline">
                <img src="{{ asset('images/102_2946.svg') }}" alt="SmartFit AI Logo" class="w-10 h-10">
                <div class="flex flex-col">
                    <span class="font-semibold text-sm leading-tight">SmartFit AI</span>
                    <span class="font-medium text-xs leading-tight">フィットネストラッカー</span>
                </div>
            </a>
        </div>

        <!-- メインナビゲーション -->
        <div class="pt-8 pb-2 border-b border-smartfit-border-light flex-grow">
            <h3 class="px-4 mb-2 text-base font-normal tracking-[1.5px] uppercase">メニュー</h3>
            <nav>
                <ul class="flex flex-col gap-2">
                    <li>
                        <x-sf-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" :icon="asset('images/I123_11372_104_3579_67_3627_35_197_31_705.svg')">
                            {{ __('ダッシュボード') }}
                        </x-sf-nav-link>
                    </li>
                    {{-- 他のリンクも同様に追加 --}}
                    <li><x-sf-nav-link :href="route('weekly-menu')" :active="request()->routeIs('weekly-menu')" :icon="asset('images/I123_11372_104_3586_67_3627_35_197_69_2466.svg')">{{ __('週間メニュー') }}</x-sf-nav-link></li>
                    <li><x-sf-nav-link href="#" :icon="asset('images/I123_11372_104_3593_67_3627_35_197.svg')">{{ __('トレーニング記録') }}</x-sf-nav-link></li>
                    <li><x-sf-nav-link href="#" :icon="asset('images/I123_11372_104_3600_67_3627_35_197_30_498.svg')">{{ __('AIトレーナー') }}</x-sf-nav-link></li>
                </ul>
            </nav>
        </div>

        <!-- フッターナビゲーション -->
        <div class="py-4">
            <nav>
                <ul class="flex flex-col gap-2">
                    <li><x-sf-nav-link href="#" :icon="asset('images/I123_11372_104_3635_67_3627_35_197.svg')">{{ __('設定') }}</x-sf-nav-link></li>
                    <li>
                        <!-- ログアウトはフォームで行う -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-sf-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                :icon="asset('images/I123_11372_104_3642_67_3627_35_197_87_9835.svg')">
                                {{ __('ログアウト') }}
                            </x-sf-nav-link>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>