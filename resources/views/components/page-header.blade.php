<header {{ $attributes->merge(['class' => 'flex flex-col items-start gap-4']) }}>
    {{-- パンくずリストコンポーネントを内部で使用 --}}
    <x-breadcrumb>
        {{-- 呼び出し元から渡されたテキストをここに表示 --}}
        {{ $slot }}
    </x-breadcrumb>

    {{-- 「ダッシュボードに戻る」ボタンコンポーネントを内部で使用 --}}
    <x-back-to-dashboard-button />

</header>