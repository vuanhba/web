<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.clients.head')
</head>
<body>
    <div class="preloader"></div>
    <div id="main-wrapper">
   @include('layout.clients.navigation')
        @yield('content')
   @include('layout.clients.footer')
   @include('layout.clients.modal')
   @include('layout.clients.js')

     </div>
</body>
</html>