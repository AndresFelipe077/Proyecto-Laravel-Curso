<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <!---<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->
    <!--favicon-->
    <!--estilos-->
    <!--<link rel="stylesheet" href="{{'css/style.css'}}">-->

    {{--Inicio style--}}

    <style>
       @import url('https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;700&display=swap');

        body {
            font-family:'DynaPuff', cursive;
            background:black;
        }

        button{
            font-family: 'Bungee Spice', cursive;
        }

        .active{ 
            color:yellow;
            font-weight:bold;
            background:grey;
        }

        /*Scroll-bar*/
::-webkit-scrollbar{
    width:1.5em;
    background:grey;
}

::-webkit-scrollbar-track{
    background: #334d50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #cbcaa5, #334d50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to top, #cbcaa5, #334d50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    border-radius:3em;
}
::-webkit-scrollbar-thumb{
    /*background-image:url(/Images/Facebook.svg);*/
    background-size: contain; 
    background-repeat:no-repeat;
    background: #ffe259;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #ffa751, #ffe259);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #ffa751, #ffe259); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    border-radius:2em;
}



body{

    font-family:'DynaPuff', cursive;
    background: #f12711;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #0ebcf1, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #0ebcf1, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

</style>

    {{--Fin style--}}

</head>
<body>
    
    

    <!--header-->
    @include('layouts.partials.header')
    

    <!--nav-->



    @yield('content')

    <!--footer-->
    @include('layouts.partials.footer')

   
    
    <!--script-->
</body>
</html>