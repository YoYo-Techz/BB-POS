@props([
    'href' => null,
    'label' => null,
    'value' => null,
    'color' => null,
    'icon' => null
])
<a
    href="{{ $href }}"
    class="group flex flex-col overflow-hidden rounded-2xl bg-{{ $color }}-50 transition hover:bg-{{ $color }}-100 active:bg-{{ $color }}-50">
    <div class="flex grow items-center justify-between p-6">
        <dl>
            <dt class="text-2xl font-bold text-{{ $color }}-600">{{ $value }}</dt>
            <dd class="text-sm font-medium text-{{ $color }}-900">
                {{ $label }}
            </dd>
        </dl>
        @if($icon)
            <i class="ri-{{ $icon }} text-3xl text-{{ $color }}-300"></i>
{{--            <svg--}}
{{--                class="hi-mini hi-arrow-uturn-up inline-block h-10 w-10 text-pink-300"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                viewBox="0 0 20 20"--}}
{{--                fill="currentColor"--}}
{{--                aria-hidden="true"--}}
{{--            >--}}
{{--                <path--}}
{{--                    fill-rule="evenodd"--}}
{{--                    d="M17.768 7.793a.75.75 0 01-1.06-.025L12.75 3.622v10.003a5.375 5.375 0 01-10.75 0V10.75a.75.75 0 011.5 0v2.875a3.875 3.875 0 007.75 0V3.622L7.293 7.768a.75.75 0 01-1.086-1.036l5.25-5.5a.75.75 0 011.085 0l5.25 5.5a.75.75 0 01-.024 1.06z"--}}
{{--                    clip-rule="evenodd"--}}
{{--                />--}}
{{--            </svg>--}}
        @endif

    </div>
</a>
