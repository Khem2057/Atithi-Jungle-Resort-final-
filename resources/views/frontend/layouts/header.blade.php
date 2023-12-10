<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atithi jungle resort</title>

    <!-- bootstrap linking -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custum linking with css -->
    <link rel="stylesheet" href="{{asset('frontend/css/headerfooter.css')}}">
    
    <!-- linking javascript -->
    <script src="{{url('frontend/js/index.js')}}"></script>
</head>
<body>
    <header>
        <div class="container">
           <div class="row">
            <div class="col-md-3 col-8"> <a class="anchor" href="{{url('/')}}"><img src="{{url('img/logo.png')}}" alt="logo"></a></div>
                <div class="col-md-9 col-4 d-flex justify-content-end">
                    <nav class="site-nav">
                        <ul>
                            <li><a class="anchor" id="home" href="{{url('/')}}">HOME</a></li>
                            <li><a class="anchor" id="room" href="{{url('/room')}}">ROOM</a></li>
                            <li><a class="anchor" id="activity" href="{{url('/activity')}}">ACTIVITY</a></li>
                            <li><a class="anchor" id="dining" href="{{url('/dining')}}">DINING</a></li>
                            <li><a class="anchor" id="package" href="{{url('/package')}}">PACKAGE</a></li>
                            <li><a class="anchor" id="gallery" href="{{url('/gallery')}}">GALLERY</a></li>
                            <li><a class="anchor" id="about" href="{{url('/about')}}">ABOUT</a></li>
                            <li><a class="anchor" id="contact" href="{{url('/contact')}}">CONTACT</a></li>
                            <li><a class="anchor" href="{{url('/signin')}}" id="book">BOOK NOW</a></li>
                        </ul>
                    </nav>
                </div>
           </div>
        </div>
    </header>
    <div class="background_img">
        <img class="bg_img" src="img/background_img.png" alt="image">
    </div>