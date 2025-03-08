@props([
    'label'=>null,
    'icon'=> null,
    'route'=>null,
    'active'=>null,
    'action'=>null,
])
<li>
    <a wire:navigate
       href="{{ $route}}"
       class="group flex items-center justify-between gap-1 rounded-md border border-transparent px-2.5 py-1 text-sm font-semibold  hover:bg-indigo-100 hover:text-indigo-600 active:border-indigo-200 {{ request()->routeIs($active) ? 'bg-indigo-100 text-indigo-500' : 'text-slate-900' }}">
        <i class="ri-hashtag text-lg"></i>
        <span class="grow">{{ $label }}</span>
        @isset($action)
            <span class="inline-flex items-center justify-center rounded-full border border-indigo-200 bg-indigo-50 px-1 text-xs text-indigo-900">
                {{ $action }}
            </span>
        @endisset
    </a>

</li>
