{{-- Main application default template --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <title>@yield('title')</title>
    @include('layouts.partials._head')
    
    <link rel="shortcut icon" href="{{{ asset('cocoTree.png') }}}">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    

    <style>
        
    </style>

  </head>
  <body>

    {{-- Navbar --}}
   

    {{-- Main Application Area --}}
    <div id="app">
      @yield('content')
    </div>

   

  </body>
</html>
