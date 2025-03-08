@section('title', 'Login')
<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
        <div class="text-center mb-6">
            <x-brand/>
        </div>

        <x-osm.alert/>

        <form wire:submit="login">
            @csrf
            <x-osm.card>
                <div class="mt-3">
                    <x-osm.input-text wire:model="email" label="Email" type="email" :required="true" class="w-full @error('error') is-invalid @enderror"/>
                </div>
                <div class="mt-3">
                    <x-osm.input-password wire:model="password" label="Password" :required="true"/>
                </div>
                <div class="mt-6">
                    <x-osm.primary-button class="w-full justify-center mx-auto">
                        <div>
                            <span class="inline-block mr-2">Login</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                        
                    </x-osm.primary-button>
                </div>
            </x-osm.card>
        </form>
    </div>
</div>

