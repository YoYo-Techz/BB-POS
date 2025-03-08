<div class="pt-4">
    <x-table>
        <x-slot name="head">
            <x-table.heading>#</x-table.heading>
            <x-table.heading>@lang('Name')</x-table.heading>
            <x-table.heading>@lang('Image')</x-table.heading>
            <x-table.heading>@lang('Category')</x-table.heading>
            <x-table.heading>@lang('Allergy')</x-table.heading>
            <x-table.heading>@lang('Price')</x-table.heading>
            <x-table.heading>@lang('Active')</x-table.heading>
            <x-table.heading>@lang('Promotion')</x-table.heading>
            <x-table.heading>@lang('Special')</x-table.heading>
        </x-slot>

        <x-slot name="body">
            @forelse ($menus as $index => $menu)
            <x-table.row>
                <x-table.cell>{{ $index + 1 }}</x-table.cell>
                <x-table.cell>{{ $menu->name }}</x-table.cell>
                <x-table.cell>
                    @if ($menu->img)
                    <img src="{{ $menu->img }}" class="w-10 h-10 rounded">
                    @else
                    <span class="text-gray-400">No Image</span>
                    @endif
                </x-table.cell>
                <x-table.cell>{{ $menu->category->name_en ?? '-' }}</x-table.cell>
                <x-table.cell>{{ $menu->allergy->name_en ?? '-' }}</x-table.cell>
                <x-table.cell>{{ number_format($menu->price, 2) }} MMK</x-table.cell>
                <x-table.cell>
                    @if ($menu->is_active)
                    <span class="text-green-500">✔</span>
                    @else
                    <span class="text-red-500">✘</span>
                    @endif
                </x-table.cell>
                <x-table.cell>
                    @if ($menu->is_promotion)
                    <span class="text-blue-500">✔</span>
                    @else
                    <span class="text-gray-400">✘</span>
                    @endif
                </x-table.cell>
                <x-table.cell>
                    @if ($menu->is_special)
                    <span class="text-yellow-500">⭐</span>
                    @else
                    <span class="text-gray-400">✘</span>
                    @endif
                </x-table.cell>
            </x-table.row>
            @empty
            <x-table.row>
                <x-table.cell colspan="9" class="text-center text-gray-400">
                    <i class="ri-inbox-2-fill mr-2"></i> @lang('No Data Available')
                </x-table.cell>
            </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
</div>