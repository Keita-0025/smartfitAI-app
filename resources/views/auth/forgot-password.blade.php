{{-- views/auth/forgot-password.blade.php --}}

<x-guest-layout>
    <main class="flex flex-col items-center max-w-sm mx-auto pt-16 pb-12 px-5">
        {{-- 1. ロゴヘッダー  --}}
        <header class="flex items-center gap-4 mb-8">
            {{-- ロゴ画像。public/images ディレクトリに配置してください --}}
            <img src="{{ asset('images/102_2946.svg') }}" alt="SmartFit AI Logo" class="w-12 h-12">
            <div class="flex flex-col">
                <h1 class="text-2xl font-bold text-smartfit-text-primary leading-none">SmartFit AI</h1>
                <p class="text-sm font-semibold text-smartfit-text-primary">フィットネストラッカー</p>
            </div>
        </header>

        {{-- 2. フォームコンテナ --}}
        <div class="w-full flex flex-col items-center">
            <h2 class="text-2xl font-medium text-smartfit-text-primary mb-2">パスワードリセット</h2>
            <p class="text-sm font-semibold text-smartfit-text-secondary text-center mb-10">登録したメールアドレスにパスワードリセットのリンクを送信します</p>

            {{-- セッションステータスメッセージ (メール送信後のフィードバック) --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- 3. パスワードリセットフォーム --}}
            <form method="POST" action="{{ route('password.email') }}" class="w-full flex flex-col gap-4">
                @csrf

                <!-- Email Address -->
                <div class="flex flex-col gap-2 text-left">
                    <label for="email" class="text-sm font-semibold text-smartfit-text-primary">メールアドレス</label>
                    <div class="relative">
                        {{-- アイコンはログイン画面と共通のものを使用 --}}
                        <img src="{{ asset('images/I96_4225_4_126_35_294.svg') }}" alt="" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" placeholder="example@email.com"
                            class="w-full bg-smartfit-input-bg border-2 border-smartfit-border rounded-lg py-2 pl-11 pr-3 text-smartfit-text-primary font-semibold placeholder:text-smartfit-text-placeholder" />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <x-primary-button class="mt-6 w-full flex justify-center py-2.5 bg-smartfit-action text-smartfit-text-primary rounded-lg font-semibold text-sm">
                    {{ __('パスワードリセットメール送信') }}
                </x-primary-button>
            </form>

            {{-- 4. ログイン画面に戻るリンク --}}
            <a class="text-smartfit-link text-sm font-semibold mt-4" href="{{ route('login') }}">
                {{ __('ログイン画面に戻る') }}
            </a>
        </div>
    </main>
</x-guest-layout>