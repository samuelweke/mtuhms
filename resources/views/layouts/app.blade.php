<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MTUHMS @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    
    
    <style>
        body{
        overflow-x: hidden;
        background: white;
        }
    </style>
    

</head>
    <div id="app">
            <main class="py-0">
                @yield('content')
            </main>
       
    </body>

    


</html>
