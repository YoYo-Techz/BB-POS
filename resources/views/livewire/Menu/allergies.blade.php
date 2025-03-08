<div class="pt-2">

    <x-table>
        <x-slot name="head">
            <x-table.heading>@lang('base.no.')</x-table.heading>
            <x-table.heading>@lang('base.name_en')</x-table.heading>
            <x-table.heading>@lang('base.name_mm')</x-table.heading>
            <x-table.heading>@lang('base.admin')</x-table.heading>
            <x-table.heading>@lang('base.status')</x-table.heading>
            <x-table.heading>@lang('base.created_at')</x-table.heading>
        </x-slot>

        <x-slot name="body">
            @forelse ($allergies as $index => $allergie)
            <x-table.row>
                <x-table.cell>{{ $loop->iteration }}</x-table.cell> <!-- ✅ Corrected Index -->

                <x-table.cell>{{ $allergie->name_en ?? 'E' }}</x-table.cell>
                <x-table.cell>{{ $allergie->name_mm ?? 'M' }}</x-table.cell>
                <x-table.cell>{{ $allergie->admin ?? 'F' }}</x-table.cell>
                <x-table.cell>
                    <span class="px-2 py-1 text-xs font-semibold rounded
                            {{ $allergie->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ $allergie->status ? __('Active') : __('Inactive') }}
                    </span>
                </x-table.cell>
                <x-table.cell>
                    {{ $allergie->created_at ? $allergie->created_at->format('Y-m-d') : 'N/A' }}
                </x-table.cell>

            </x-table.row>
            @empty
            <x-table.row>
                <x-table.cell colspan="7" class="text-center text-gray-400">
                    <i class="ri-inbox-2-fill mr-2"></i> @lang('base.there_is_no_data')
                </x-table.cell>
            </x-table.row>
            @endforelse
        </x-slot>
    </x-table>

</div>