@props([
'label' => null,
'value' => null,
'icon' => 'image-circle-fill',
'color' => 'gray'
])
<div>
    <div
        class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none hover:bg-gray-100">
        <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
            <div class="rounded-full bg-gray-100 hover:bg-white px-4 py-3">
                <span class="flex items-center text-brand-500 text-{{  $color }}-500 dark:text-white">
                    <i class="ri-{{ $icon }}"></i>
                </span>
            </div>
        </div>
        <div class="h-50 ml-4 flex w-auto flex-col justify-center">
            <p class="text-xs sm:text-sm font-medium text-gray-600">{{ $label }}</p>
            <h4 class="text-md font-bold text-navy-700 dark:text-white">{{ $value }}</h4>
        </div>
    </div>
</div>