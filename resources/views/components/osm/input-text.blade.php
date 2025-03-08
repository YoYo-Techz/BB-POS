@props([
    'disabled' => false,
    'label' => null,
    'required' => false,
])
<div>
    @if ($label)
    <label class="mb-1 block font-medium text-sm text-gray-700 dark:text-gray-300" for="password">{{ $label }} @if($required)<sup class="text-red-500">*</sup>@endif</label>
    @endif
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
</div>
