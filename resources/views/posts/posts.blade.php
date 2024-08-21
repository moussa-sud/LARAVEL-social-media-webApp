<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
$main-green: #79dd09 !default;
$main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
$main-yellow: #bdbb49 !default;
$main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
$main-red: #bd150b !default;
$main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
$main-blue: #0076bd !default;
$main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

/* This pen */
/* Basic setup */
body {
    font-family: "Baloo 2", cursive;
    font-size: 16px;
    color: #ffffff;
    text-rendering: optimizeLegibility;
    font-weight: initial;
}

.dark {
    background: #110f16;
}

.light {
    background: #f3f5f7;
}

a, a:hover {
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

#pageHeaderTitle {
    margin: 2rem 0;
    text-transform: uppercase;
    text-align: center;
    font-size: 2.5rem;
}

/* Cards */
.postcard {
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
    border-radius: 10px;
    margin: 0 0 2rem 0;
    overflow: hidden;
    position: relative;
    color: #ffffff;
    background-color: #18151f; /* Default dark background */
    width: 100%; /* Full width */
    max-width: 100%; /* Ensure it doesn't overflow */

    &.light {
        background-color: #e1e5ea;
    }

    .postcard__title {
        font-size: 1.75rem;
    }

    .postcard__img {
        max-height: 400px;
        width: 100%;
        object-fit: cover;
        display: block; 
    }

    .postcard__bar {
        width: 50px;
        height: 10px;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #424242;
        transition: width 0.2s ease;
    }

    .postcard__text {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
    }

    .postcard__preview-txt {
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: justify;
    }

    .postcard__tagbox {
        display: flex;
        flex-flow: row wrap;
        font-size: 14px;
        margin: 20px 0 0 0;
        padding: 0;
        justify-content: center;
    }

    .postcard__tagbox .tag__item {
        display: inline-block;
        background: rgba(83, 83, 83, 0.4);
        border-radius: 3px;
        padding: 2.5px 10px;
        margin: 0 5px 5px 0;
        cursor: default;
        user-select: none;
        transition: background-color 0.3s;
    }

    .postcard__tagbox .tag__item:hover {
        background: rgba(83, 83, 83, 0.8);
    }

    &:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-image: linear-gradient(-70deg, #424242, transparent 50%);
        opacity: 1;
        border-radius: 10px;
    }

    &:hover .postcard__bar {
        width: 100px;
    }
}

@media screen and (min-width: 769px) {
    .postcard {
        flex-direction: row;
        max-width: 100%; /* Ensure it fits within columns */
    }

    .postcard__img {
        max-width: 300px;
        transition: transform 0.3s ease;
    }

    .postcard__text {
        padding: 3rem;
        width: 100%;
    }

    .postcard:hover .postcard__img {
        transform: scale(1.1);
    }

    .postcard:nth-child(2n+1) {
        flex-direction: row;
    }

    .postcard:nth-child(2n+0) {
        flex-direction: row-reverse;
    }

    .postcard:nth-child(2n+1) .postcard__text::before {
        left: -12px;
        transform: rotate(4deg);
    }

    .postcard:nth-child(2n+0) .postcard__text::before {
        right: -12px;
        transform: rotate(-4deg);
    }
}

@media screen and (min-width: 1024px) {
    .postcard__text {
        padding: 2rem 3.5rem;
    }

    .postcard__text:before {
        top: -20%;
        height: 130%;
        width: 55px;
    }

    .postcard.dark .postcard__text:before {
        background: #18151f;
    }

    .postcard.light .postcard__text:before {
        background: #00234e;
    }
}

/* Colors */
.postcard .postcard__tagbox .green.play:hover {
    background: #79dd09;
    color: black;
}

.green .postcard__title:hover {
    color: #79dd09;
}

.green .postcard__bar {
    background-color: #79dd09;
}

.green::before {
    background-image: linear-gradient(-30deg, rgba(121, 221, 9, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .blue.play:hover {
    background: #0076bd;
}

.blue .postcard__title:hover {
    color: #0076bd;
}

.blue .postcard__bar {
    background-color: #0076bd;
}

.blue::before {
    background-image: linear-gradient(-30deg, rgba(0, 118, 189, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .red.play:hover {
    background: #bd150b;
}

.red .postcard__title:hover {
    color: #bd150b;
}

.red .postcard__bar {
    background-color: #bd150b;
}

.red::before {
    background-image: linear-gradient(-30deg, rgba(189, 21, 11, 0.1), transparent 50%);
}

.postcard .postcard__tagbox .yellow.play:hover {
    background: #bdbb49;
    color: black;
}



.postcard__preview-txt{
    src: url('fonts/AmstelvarAlpha-VF.ttf');
  font-family:'AmstelvarAlpha';
  font-style: normal;
  color: black;
}

.postcard__subtitle{
    color: rgb(123, 155, 215);
}





.yellow .postcard__title:hover {
    color: #bdbb49;
}

.yellow .postcard__bar {
    background-color: #bdbb49;
}

.yellow::before {
    background-image: linear-gradient(-30deg, rgba(189, 187, 73, 0.1), transparent 50%);
}

@media screen and (min-width: 769px) {
    .green::before {
        background-image: linear-gradient(-80deg, rgba(121, 221, 9, 0.1), transparent 50%);
    }

    .blue::before {
        background-image: linear-gradient(-80deg, rgba(0, 118, 189, 0.1), transparent 50%);
    }

    .red::before {
        background-image: linear-gradient(-80deg, rgba(189, 21, 11, 0.1), transparent 50%);
    }

    .yellow::before {
        background-image: linear-gradient(-80deg, rgba(189, 187, 73, 0.1), transparent 50%);
    }
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('posts.index') }}">ReLux</a>
    
            <!-- Toggler/collapsible Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar links and content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">View All Friends</a>
                    </li>
                </ul>
    
                <!-- Search Form -->
                <form class="d-flex me-auto" action="{{ route('posts.search') }}" method="GET" role="search">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
    
                <!-- Avatar and Dropdown -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://freesvg.org/img/abstract-user-flat-4.png" class="rounded-circle" height="22" alt="Portrait of a Woman" loading="lazy"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                <span class="glyphicon glyphicon-log-out"></span> Log out
                            </a></li>
                        </ul>
                    </li>
                </ul>
                
    
                
                
                
            </div>
        </div>
    </nav>
    
    

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    <section class="light py-4">
        <div class="container">
            <a class="btn btn-info" aria-current="page" href="{{ route('posts.create') }}">Add New Post</a>
            <div class="h1 text-center text-dark" id="pageHeaderTitle">HOME</div>
            
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <!-- Wrap the entire article in one link -->
                        <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                            <article class="postcard light blue">
                                <div class="postcard__img_link">
                                    <img class="postcard__img" src="{{ asset('storage/images/' . $post->photo) }}" alt="Post Image" />
                                </div>
                                <div class="postcard__text t-dark">
                                    <div class="postcard__subtitle small">
                                        <time datetime="2020-05-25 12:00:00">
                                            <i class="fas fa-calendar-alt mr-2"></i><p><strong>{{ $post->profs->name ?? 'Unknown Author' }}</strong></p>
                                        </time>
                                    </div>
                                    <h1 class="postcard__title blue">{{ $post->title }}</h1>
                                    
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">{{ $post->body }}</div>
                                    <ul class="postcard__tagbox">
                                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                        <li class="tag__item play blue">
                                            <i class="fas fa-play mr-2"></i>{{ $post->created_at->format('M d, Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
   <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9K2rL0yLZzFGE7EMb2F4R8HBm0o4a3bbl9cbJ0fQ1lO6I94zT1qI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></script>
</body>
</html>