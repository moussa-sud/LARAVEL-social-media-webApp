<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('main')}}">ReLux</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ms-auto">
                </div>
            </div>
        </div>
    </nav>




    <div class="container">


        <div class="profile_box">
            <h3>{{$profile->name}}</h3>
            <p>{{$profile->email}}</p>
            
            <div class="social_media">



            </div>

            

            <div class="profile-bottom">
                <p>{{$profile->bio}}</p>
                <img src="images/arrow.png">
            </div>
        
        </div>

    </div>

    

</body>
</html>