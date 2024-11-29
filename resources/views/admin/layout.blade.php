<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.partials.metadata')
    @include('admin.partials.styles')
</head>

<body class="font-primary">
    @include('admin.partials.content')
    @include('admin.partials.scripts')
</body>

</html>
