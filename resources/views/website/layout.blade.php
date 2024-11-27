<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('website.partials.metadata')
    @include('website.partials.styles')
</head>

<body class="font-primary">
    @include('website.partials.content')
    @include('website.partials.scripts')
</body>

</html>
