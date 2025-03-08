@props([
    'route' => null,
    'label' => null,
])
<a {{ $attributes->merge(['class'=>'text-blue-500 hover:text-blue-400 border-b-2 border-transparent hover:border-blue-400 hover:border-dotted']) }}
   href="{{ $route }}">
    {{ $label }}
</a>
