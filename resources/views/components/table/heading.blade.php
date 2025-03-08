@props([
    'sortable' => false,
    'direction' => null,
])
<th
    {{ $attributes->merge(['class' => 'dark:text-dark-200 px-3 py-3.5 text-left text-sm font-semibold text-gray-700 whitespace-nowrap']) }}
        @unless($sortable)
            <span class="text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">{{ $slot }}</span>
        @else
            <button {{ $attributes->except('class') }} class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider hover:text-gray-900">
                <span>{{ $slot }}</span>
                <span>
                    @if($direction === 'asc')
                        <i class="ri-arrow-up-s-line"></i>
                    @elseif($direction === 'desc')
                        <i class="ri-arrow-down-s-line"></i>
                    @endif
                </span>
            </button>
        @endunless

</th>
