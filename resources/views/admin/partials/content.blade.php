@include('admin.partials.header')

<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-neutral-900">

    @include('admin.partials.sidebar')

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-neutral-900">

        <main>
            @yield('content')
        </main>

        @include('admin.partials.footer')

    </div>

</div>
