@props([
    'title' => null,
    'value' => 0,
    'icon' => null,
    'items' => null
])
<a href="" class="flex flex-col rounded-2xl border bg-white hover:border-slate-300 active:border-slate-200">
    <div class="flex w-full grow items-center justify-between p-5 lg:p-6">
        <dl>
            <dt class="text-2xl font-bold">{{ $value }}</dt>
            <dd class="text-slate-600">{{ $title }}</dd>
        </dl>
        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
            <i class="ri-{{ $icon }}"></i>
        </div>
    </div>
    <div class="w-full border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500 lg:px-6">
        <ul class="divide-y divide-gray-200">

            @if(is_array($items))
                @foreach($items as $item)
                    <li class="py-3 flex justify-between items-center user-card">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $item['name'] }}</span>
                        </div>
                        <div class="flex h-6 w-6 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                            {{ $item['value'] }}
                        </div>
                    </li>
                @endforeach
            @endif

        </ul>
    </div>
</a>
