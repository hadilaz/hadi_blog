<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
       @include('includes.header')

    <div class="container">
    @yield('conten')
    </div>
    




     @include('includes.footer')   

     @yield('js')
</body>
</html>