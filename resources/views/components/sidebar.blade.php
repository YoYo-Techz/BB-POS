<nav id="page-sidebar"
    class="fixed bottom-0 start-0 top-0 z-50 flex h-full w-80 flex-col overflow-auto bg-slate-100 transition-transform duration-500 ease-out lg:w-64 lg:translate-x-0"
    x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0': mobileSidebarOpen,
        'lg:-translate-x-full': !desktopSidebarOpen,
        'lg:translate-x-0': desktopSidebarOpen,
    }" aria-label="Main Sidebar Navigation" x-cloak>
    <!-- Sidebar Header -->
    <div class="flex h-20 w-full flex-none items-center justify-between px-8">
        <!-- Brand -->
        <x-brand />
        <!-- END Brand -->

        <!-- Close Sidebar on Mobile -->
        <div class="lg:hidden">
            <button type="button"
                class="flex h-10 w-10 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400"
                x-on:click="mobileSidebarOpen = false">
                <x-icon-close />
            </button>
        </div>
        <!-- END Close Sidebar on Mobile -->
    </div>
    <!-- END Sidebar Header -->

    <!-- Main Navigation -->
    <div>
        <ul class="w-full grow space-y-1.5 px-8 py-4">
            <x-sidebar-item label="{{ __('base.dashboard') }}" icon="dashboard-3" route="{{ route('dashboard') }}"
                active="dashboard" />


            <x-sidebar-item :label="@trans('base.menu')" icon="coupon-3" active="menu.*" :multiple="true">
                <x-slot:items>
                    <x-sidebar-subitem :label="@trans('base.fmenu')" active="menu.fmenu*"
                        :route="route('menu.fmenu')" />
                    <x-sidebar-subitem :label="@trans('base.menu_type')" active="menu.menu-type*"
                        :route="route('menu.menu-type')" />
                    <x-sidebar-subitem :label="@trans('base.allergies')" active="menu.allergies*"
                        :route="route('menu.allergies')" />
                    <x-sidebar-subitem :label="@trans('base.category')" active="menu.category*"
                        :route="route('menu.category')" />
                </x-slot:items>
            </x-sidebar-item>


        </ul>


        <ul class="w-full grow space-y-1.5 px-8 py-4">
            <a href="{{ route('profile') }}" class="md:bg-gray-200 rounded-2xl p-3 sm:flex sm:justify-between"
                wire:navigate>
                <div class="flex items-center">
                    <img class="h-12 w-12 rounded-full"
                        src="https://ui-avatars.com/api/?background=random&name={{ auth()->user()->name }}" alt="">
                    <div class="ml-2 text-sm">
                        <h3 class="text-lg text-gray-800 font-medium">{{ auth()->user()->name }}</h3>
                        <span class="text-xs text-gray-600">{{ auth()->user()->refer_code }}</span>
                    </div>
                </div>
            </a>
        </ul>
    </div>
    <!-- END Main Navigation -->
</nav>