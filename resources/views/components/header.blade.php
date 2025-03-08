<header
    id="page-header"
    class="fixed end-0 start-0 top-0 z-30 flex h-20 flex-none items-center border-b border-slate-100 bg-white/90 backdrop-blur-sm"
    x-bind:class="{ 'lg:ps-64': desktopSidebarOpen }">
    <div
        class="container mx-auto flex justify-between px-4 lg:px-8 xl:max-w-7xl"
    >
        <!-- Left Section -->
        <div class="flex items-center">
            <!-- Toggle Sidebar on Mobile -->
            <div class="me-2 lg:hidden">
                <button
                    type="button"
                    class="inline-flex items-center justify-center rounded-lg border-slate-100 bg-slate-100 px-2.5 py-2 font-semibold leading-6 text-slate-800 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-800 focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-25 active:border-slate-100 active:bg-slate-100"
                    x-on:click="mobileSidebarOpen = true">
                    <svg
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Mobile -->

            <!-- Toggle Sidebar on Desktop -->
            <div class="hidden lg:block">
                <button
                    type="button"
                    class="inline-flex items-center justify-center rounded-lg border-slate-100 bg-slate-100 px-2.5 py-2 font-semibold leading-6 text-slate-800 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-800 focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-25 active:border-slate-100 active:bg-slate-100"
                    x-on:click="desktopSidebarOpen = !desktopSidebarOpen">
                    <svg
                        class="hi-solid hi-menu-alt-1 inline-block h-5 w-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
            <!-- END Toggle Sidebar on Desktop -->
        </div>
        <!-- END Left Section -->

        <!-- Middle Section lg:hidden -->
        <div class="flex items-center gap-2 lg:hidden">
            <!-- Brand -->
            <x-brand/>
{{--            <x-ts-alert text="Be careful, you're running with prod db" color="red"/>--}}
            <!-- END Brand -->
        </div>
        <!-- END Middle Section -->

        <!-- Right Section -->
        <div class="flex items-center gap-2">
            <x-osm.dropdown label="{{getLocale()}}">
                <x-slot:items>
                    <x-osm.dropdown-item href="{{ route('set-locale', 'en') }}" label="English"/>
                    <x-osm.dropdown-item href="{{ route('set-locale', 'vi') }}" label="Viet Nam"/>
                    <x-osm.dropdown-item href="{{ route('set-locale', 'my') }}" label="Myanmar"/>
                </x-slot:items>
            </x-osm.dropdown>


            <a
                href="{{ route('logout') }}"
                class="inline-flex items-center justify-center rounded-lg border-slate-100 bg-slate-100 px-2.5 py-2 font-semibold leading-6 text-slate-800 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-800 focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-25 active:border-slate-100 active:bg-slate-100">
                <i class="ri-logout-box-r-line"></i>
            </a>

            <!-- END Toggle Sidebar on Mobile -->
        </div>
        <!-- END Right Section -->
    </div>
</header>
