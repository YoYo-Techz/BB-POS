@props([
    'rows' => []
])
<div class="flex-col space-y-4">
    <x-table>
        <x-slot:head>
            <x-table.heading>@lang('base.number')</x-table.heading>
            <x-table.heading>@lang('base.amount')</x-table.heading>
            <x-table.heading>@lang('base.created_at')</x-table.heading>
            <x-table.heading>@lang('base.user')</x-table.heading>
        </x-slot:head>

        <x-slot:body>
            @forelse($rows as $row)
                <x-table.row wire:key='{{  $row->id }}'>
                    <x-table.cell>{{ $row->number }}</x-table.cell>
                    <x-table.cell>{{ $row->amount  }}</x-table.cell>
                    <x-table.cell>{{ $row->created_at }}</x-table.cell>
                    <x-table.cell>{{ $row->user?->name }}</x-table.cell>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell colspan="4" class="text-center text-gray-300">
                        <i class="ri-inbox-2-fill mr-2"></i>@lang('base.there_is_no_data')
                    </x-table.cell>
                </x-table.row>
            @endforelse

        </x-slot:body>
    </x-table>

</div>