<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 10px;
            background: #DCDCDC;
        }
        .content {
            padding: 10px 0px;
        }
        .post-list {
            padding: 9px 0px;
        }
        .post {
            background: #fff;
            margin-bottom: 40px;
            border-radius: 3px;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
            width: 100%;
            float: left;
        }
        .author-info {
            padding: 5px;
            background: #fcfcfc;
            border-bottom: 1px solid #ddd;
            min-height: 60px;
        }
        .author-info ul li {
            float: left;
            padding-left: 20px;
            padding-right: 20px;
            border-left: 1px solid #ddd;
        }
        .author-info ul li:first-child {
            border-left: none;
            padding-left: 0px;
        }
        .author-info p {
            margin: 0px;
            color: #3b4952;
            font-weight: 300;
            font-size: 14px;
        }
        .post-img img {
            width: 300px;
            height: 300px;
            border-radius: 3px 3px 0px 0px;
        }
        .caption {
            padding: 25px;
        }
        .caption h3 {
            color: #36a0e7;
            font-weight: 300;
            font-size: 34px;
            margin-bottom: 20px;
        }
        .caption p {
            font-size: 16px;
            line-height: 28px;
            margin-bottom: 20px;
        }
        body {
            background: #dd5e89;
            background: -webkit-linear-gradient(to left, #dd5e89, #f7bb97);
            background: linear-gradient(to left, #dd5e89, #f7bb97);
            min-height: 100vh;
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
         
                    </li>
                    <!-- Add more nav items here if needed -->
                </ul>
                

                <!-- Logout Button -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                   class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </div>
        </div>
    </nav>
    <div class="container content">
        <div class="post-list">
            <div class="post">
                <div class="post-type">
                    <div class="author-info">
                        <ul class="list-inline">
                            <li>
                                <div class="icon-box"><i class="fas fa-calendar-alt"></i></div>
                                <p><strong>{{ $post->created_at->format('d/M-Y') }}</strong></p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-user"></i></div>
                                <p><strong>{{ $post->profs->name ?? 'Unknown Author' }}</strong></p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="fas fa-tags"></i></div>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="post-img">
                        @if ($post->photo)
                            <img src="{{ asset('storage/images/' . $post->photo) }}" alt="Post Image">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>
                <div class="caption">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
