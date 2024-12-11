@include('website.partials.header')

@yield('content')

<div class="hidden md:block">
    @include('website.partials.footer')
</div>

<div class="block md:hidden">
    @include('website.partials.bottom-navigation')
</div>
