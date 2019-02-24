<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body id="fon">
@include('layouts.header')

<maine class="maine">
    @yield('content')
</maine>
<footer class="footer">
    <p>Создано с любовью morepozitiva!!!!&nbsp; {{ date('Y') }}</p>

</footer>
</body>
@include('layouts.scripts')
</html>