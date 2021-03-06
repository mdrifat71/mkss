<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_title ?? "MKSS- Manob kallyan swabolombi songstha"}}</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <meta name="description" content="{{$description ?? ""}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-16x16.png')}}">
   
    <meta name="keyword" content="{{$keyword ?? ""}}"">

    <meta name="robots" content={{$robots ?? "follow" }}>
    <style>
        .running-project{
            background : #28a745;
            color : #fff;
        }

        .archieved-project{
            background : #6c757d;
            color : #fff;
        }

        .no-project-alert{
            font-size: 1.5rem;
            padding : 1rem 2rem;
        }
        
    </style>
     @yield('style')

</head>
<body>
    
    @yield('main')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>