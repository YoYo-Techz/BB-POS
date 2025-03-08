import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Chart from 'chart.js/auto';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
    resolve: {
        alias: {
            'chart.js': 'node_modules/chart.js/dist/chart.cjs',
        },
    },
});
