<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>

    @include('theme.partials.header')

    @yield('content')

    {{-- Footer --}}
    @include('theme.partials.footer')

    {{-- JavaScript --}}
    @include('theme.partials.scripts')

</body>
</html>