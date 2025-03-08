@props([
    'cardHeader' => null,
    'cardBody' => null,
    'cardFooter' => null,
])
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    {{ $slot }}
</div>