<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials2.head')
</head>
<body>
    <header>
        @include('partials2.header')
    </header>
    <section class="content">
        @yield('content')
    </section>
    <footer class="bg-191 color-ccc">
        @include('partials2.footer')
    </footer>
    @include('partials2.script')
</body>
</html>
