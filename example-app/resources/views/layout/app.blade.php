<html>
    <head>
        @include('includes.meta')
        <title>@yield('title')| Landing page</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="">
        <link rel="shotcut icon" type="image/x-icon" href="">


        @stack('before-style')

        <!-- style -->
        @include('include.style')
        
        @stack('after-style')
    </head>

    <body>
        
        @include('include.header')
        @yield('content')
        @include('include.footer')


        @stack('before-script')

        <!-- Script -->

        @include('includes.script')

        @stack('after-script')
    </body>
</html>

