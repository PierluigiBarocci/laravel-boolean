<!DOCTYPE html>
<html lang="en" dir="ltr">
    @include('layouts.head')
    <body>
        @include('layouts.header')
        <main>
            @yield('content')            
        </main>
        @include('layouts.footer')
    </body>
</html>
