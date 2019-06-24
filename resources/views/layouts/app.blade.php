<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MTUHMS @yield('title')</title>


       <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

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
