<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.css')
</head>
<body>
    @include('layouts.admin.sidebar')

    <main class="content">
        @include('layouts.admin.header')

        {{-- Start Main Content --}}
        @yield('content')
        {{-- End Main Content --}}

        @include('layouts.admin.footer')
    </main>

    @include('layouts.admin.js')
</body>
</html>