<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - @yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://livewire.laravel.com/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css"
        integrity="sha512-i5VzKip7owqOGjb0YTF8MR2J9yBVO3FLHeazKzLp354XYTmKcqEU3UeFYUw82R8tV6JqxeATOfstCfpfPhbyEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <tallstackui:script />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>


    @auth()
    <div x-data="{ mobileSidebarOpen: false, desktopSidebarOpen: true }">
        <!-- Page Container -->
        <div id="page-container" class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-white lg:ps-64"
            x-bind:class="{ 'lg:ps-64': desktopSidebarOpen }">

            <x-sidebar />
            <x-header />

            <main id="page-content" class="bg-slate-50 flex max-w-full flex-auto flex-col pt-20">

                <!-- Page Section -->
                <div class="container mx-auto space-y-10 px-4 py-8 lg:space-y-16 lg:px-8 lg:py-12 xl:max-w-7xl">

                    {{ $slot }}

                </div>
            </main>

        </div>
    </div>
    @endauth

    @guest()
    {{ $slot }}
    @endguest


    @stack('scripts')
</body>

</html>