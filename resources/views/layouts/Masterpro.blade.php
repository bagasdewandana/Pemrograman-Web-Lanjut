<html>
<title>@yield('title')</title>
    <head>
    <body>
        @include('layouts.navigation')
        <div>
            @yield('content')
        </div>
    </body>
    </head>
</html>