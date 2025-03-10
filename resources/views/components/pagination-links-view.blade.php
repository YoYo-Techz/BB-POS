{{--<div>--}}

{{--    @if ($paginator->hasPages())--}}

{{--        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">--}}

{{--            <span>--}}

{{--                --}}{{-- Previous Page Link --}}

{{--                @if ($paginator->onFirstPage())--}}

{{--                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">--}}

{{--                        {!! __('pagination.previous') !!}--}}

{{--                    </span>--}}

{{--                @else--}}

{{--                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">--}}

{{--                        {!! __('pagination.previous') !!}--}}

{{--                    </button>--}}

{{--                @endif--}}

{{--            </span>--}}



{{--            <span>--}}

{{--                --}}{{-- Next Page Link --}}

{{--                @if ($paginator->hasMorePages())--}}

{{--                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">--}}

{{--                        {!! __('pagination.next') !!}--}}

{{--                    </button>--}}

{{--                @else--}}

{{--                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">--}}

{{--                        {!! __('pagination.next') !!}--}}

{{--                    </span>--}}

{{--                @endif--}}

{{--            </span>--}}

{{--        </nav>--}}

{{--    @endif--}}

{{--</div>--}}

<div class="flex justify-center">
    <nav class="flex space-x-2" aria-label="Pagination">
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm bg-gradient-to-r from-violet-300 to-indigo-300 border border-fuchsia-100 hover:border-violet-100 text-white font-semibold cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
            Previous
        </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-fuchsia-100 hover:bg-fuchsia-200 cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
            1
        </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-fuchsia-100 hover:bg-fuchsia-200 cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
            2
        </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-fuchsia-100 hover:bg-fuchsia-200 cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
            3
        </a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm bg-gradient-to-r from-violet-300 to-indigo-300 border border-fuchsia-100 hover:border-violet-100 text-white font-semibold cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
            Next
        </a>
    </nav>
</div>
