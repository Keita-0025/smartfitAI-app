{{-- views/auth/login.blade.php --}}

<x-guest-layout>
    <main class="flex flex-col items-center max-w-sm mx-auto pt-16 pb-12 px-5">
        {{-- 1. ロゴヘッダー --}}
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
            <h2 class="text-2xl font-medium text-smartfit-text-primary mb-2">ログイン</h2>
            <p class="text-sm font-semibold text-smartfit-text-secondary mb-10">アカウントにログインして下さい</p>

            {{-- セッションステータスメッセージ (パスワードリセット後など) --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- 3. ログインフォーム --}}
            <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col gap-4">
                @csrf

                <!-- Email Address -->
                <div class="flex flex-col gap-2 text-left">
                    <x-forms.input-group label="メールアドレス" name="email" type="email" required autofocus
                        placeholder="メールアドレスを入力" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2 text-left">
                    <x-forms.input-group label="パスワード" name="password" type="password" required
                        placeholder="パスワードを入力" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me (オプション。元の機能にはあるので非表示で保持) -->
                <div class="hidden">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <x-primary-button class="mt-6 w-full flex justify-center py-2.5 bg-smartfit-action text-smartfit-text-primary rounded-lg font-semibold text-sm">
                    {{ __('ログイン') }}
                </x-primary-button>
            </form>

            {{-- 4. パスワード忘れのリンク --}}
            @if (Route::has('password.request'))
            <a class="text-smartfit-link text-sm font-semibold mt-4" href="{{ route('password.request') }}">
                {{ __('パスワードを忘れた場合') }}
            </a>
            @endif
        </div>

        {{-- 5. 区切り線 --}}
        <div class="flex items-center gap-5 w-full my-6">
            <hr class="flex-grow border-t border-smartfit-border">
            <span class="text-sm font-semibold text-smartfit-text-secondary">または</span>
            <hr class="flex-grow border-t border-smartfit-border">
        </div>

        {{-- 6. 代替ログイン (これらの機能は別途実装が必要です) --}}
        <div class="w-full flex flex-col gap-4">
            <button class="w-full flex justify-center items-center gap-2 py-2.5 bg-smartfit-action-light border border-smartfit-link rounded-lg text-smartfit-text-primary font-semibold text-sm">
                <img src="{{ asset('images/I23_419_35_312.svg') }}" alt="" class="w-5 h-5">
                管理者としてログイン
            </button>
        </div>

        {{-- 7. 新規登録フッター --}}
        <footer class="flex flex-col items-center gap-1 mt-8 text-sm font-semibold">
            <p class="text-smartfit-text-secondary">アカウントをお持ちでない場合</p>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-smartfit-link">
                {{ __('新規登録はこちら') }}
            </a>
            @endif
        </footer>
    </main>
</x-guest-layout>