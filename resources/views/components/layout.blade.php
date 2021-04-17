<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Serie Tv Addicted</title>

        <!-- font -->
       
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
         <!-- Link FontAwesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <!-- Styles -->
       <link rel="stylesheet" href="{{asset('/css/app.css')}}">
       
    </head>
    <body>
        <x-navbar></x-navbar>
        {{$slot}}
        <x-footer></x-footer>
        
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    </html>
    