@props([
    'label'=>null,
    'icon'=> 'hashtag',
    'route'=>null,
    'active'=>null,
    'action'=>null,
    'multiple' => false,
    'items' => []
])
<li>
    @if(!$multiple)
        <a wire:navigate
           href="{{ $route}}"
           class="group flex items-center justify-between gap-2 rounded-md border border-transparent px-2.5 py-2 text-sm font-semibold  hover:bg-indigo-100 hover:text-indigo-600 active:border-indigo-200 {{ request()->routeIs($active) ? 'bg-indigo-100 text-indigo-500' : 'text-slate-900' }}">
            <i class="ri-{{ $icon }}-{{ request()->routeIs($active)  ? 'fill' : 'line' }} text-lg"></i>
            <span class="grow">{{ $label }}</span>
            @isset($action)
                <span class="inline-flex items-center justify-center rounded-full border border-indigo-200 bg-indigo-50 px-1 text-xs text-indigo-900">
                {{ $action }}
            </span>
            @endisset
        </a>
    @else
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="group w-full flex items-center justify-between gap-2 rounded-md border border-transparent px-2.5 py-2 text-sm font-semibold  hover:bg-indigo-100 hover:text-indigo-600 active:border-indigo-200 {{ request()->routeIs($active) ? 'bg-indigo-100 text-indigo-500' : 'text-slate-900' }}">
                <div>
                    <i class="ri-{{ $icon }}-{{ request()->routeIs($active)  ? 'fill' : 'line' }} text-lg"></i>
                    <span class="grow ml-1">{{ $label }}</span>
                </div>

                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" x-show="open" class="ml-3 py-2 space-y-2">
                {{ $items }}
            </ul>
        </div>
    @endif

</li>
