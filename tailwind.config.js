import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            //プロジェクトのカラーパレット
            colors: {
                smartfit: {
                    'bg': '#212529',
                    'text-primary': '#f8f9fa',
                    'text-secondary': '#adb5bd',
                    'text-placeholder': '#6c757d',
                    'action': '#d02224',
                    'action-light': 'rgba(227, 80, 83, 0.3)',
                    'link': '#e35053',
                    'border': '#495057',
                    'input-bg': 'rgba(108, 117, 125, 0.3)',
                    'tertiary-bg': 'rgba(73, 80, 87, 0.3)', // カード背景用
                    'border-light': '#343a40',             // サイドバーの区切り線用
                    'text-emphasis': '#dee2e6',            // 強調テキスト用 (例: 筋トレ詳細)
                    'black': '#000000'
                }
            }
        },
    },

    plugins: [forms],
};
