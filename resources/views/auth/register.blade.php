{{-- views/auth/register.blade.php --}}

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

        {{-- 2. フォームタイトル --}}
        <h2 class="text-2xl font-medium text-smartfit-text-primary">新規登録</h2>
        <p class="text-sm font-semibold text-smartfit-text-secondary mt-2 mb-6">アカウントを作成して下さい</p>

        {{-- 3. 新規登録フォーム --}}
        <form method="POST" action="{{ route('register') }}" class="w-full flex flex-col gap-4">
            @csrf

            <!-- Name -->
            <div class="flex flex-col gap-2 text-left">
                <label for="name" class="text-sm font-semibold text-smartfit-text-primary">お名前</label>
                <div class="relative">
                    <img src="{{ asset('images/I102_2954_4_126_35_294.svg') }}" alt="" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5">
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                        placeholder="山田 太郎"
                        class="w-full h-9 bg-smartfit-input-bg border-2 border-smartfit-border rounded-lg py-2 pl-11 pr-3 text-smartfit-text-primary font-semibold placeholder:text-smartfit-text-placeholder" />
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>

            <!-- Email Address -->
            <div class="flex flex-col gap-2 text-left">
                <label for="email" class="text-sm font-semibold text-smartfit-text-primary">メールアドレス</label>
                <div class="relative">
                    <img src="{{ asset('images/I102_2957_35_294.svg') }}" alt="" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5">
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                        placeholder="example@email.com"
                        class="w-full h-9 bg-smartfit-input-bg border-2 border-smartfit-border rounded-lg py-2 pl-11 pr-3 text-smartfit-text-primary font-semibold placeholder:text-smartfit-text-placeholder" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <!-- Password -->
            <div class="flex flex-col gap-2 text-left">
                <label for="password" class="text-sm font-semibold text-smartfit-text-primary">パスワード</label>
                <div class="relative">
                    <img src="{{ asset('images/I102_2958_4_126_35_294.svg') }}" alt="" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5">
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
                        placeholder="パスワードを入力"
                        class="w-full h-9 bg-smartfit-input-bg border-2 border-smartfit-border rounded-lg py-2 pl-11 pr-3 text-smartfit-text-primary font-semibold placeholder:text-smartfit-text-placeholder" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col gap-2 text-left">
                <label for="password_confirmation" class="text-sm font-semibold text-smartfit-text-primary">パスワード確認</label>
                <div class="relative">
                    <img src="{{ asset('images/I102_2959_4_126_35_294.svg') }}" alt="" class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5">
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        placeholder="パスワードを再入力"
                        class="w-full h-9 bg-smartfit-input-bg border-2 border-smartfit-border rounded-lg py-2 pl-11 pr-3 text-smartfit-text-primary font-semibold placeholder:text-smartfit-text-placeholder" />
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
            </div>

            <button type="submit" class="mt-6 w-full flex justify-center h-9 items-center bg-smartfit-action text-smartfit-text-primary rounded-lg font-semibold text-sm">
                アカウント作成
            </button>
        </form>

        {{-- 4. ログイン画面へのリンク --}}
        <div class="flex flex-col items-center gap-2 mt-6">
            <p class="text-sm font-semibold text-smartfit-text-secondary">すでにアカウントをお持ちの場合</p>
            <a href="{{ route('login') }}" class="text-sm font-semibold text-smartfit-link">
                ログインはこちら
            </a>
        </div>
    </main>
</x-guest-layout>
