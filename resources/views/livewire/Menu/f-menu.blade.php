<div class="space-y-4">
    <!-- Header Section -->
    <div class="flex justify-between">
        <x-osm.primary-button class="w-full justify-center mx-auto" wire:click="create">
            <span class="inline-block mr-2">Create Menu</span>
        </x-osm.primary-button>
    </div>

    @livewire('f-menu-table')
</div>