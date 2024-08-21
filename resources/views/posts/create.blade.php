<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create New Post</title>
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
                <!-- Add more nav items here if needed -->
            </ul>
            
            <!-- Search Form -->

            
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


      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    
    @csrf 
    <div class="container p-5">
        <div id="formContainer">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">title</label>
                <input name="title" class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            </div>

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">body</label>
                <input name="body" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-4">
                <label  for="exampleFormControlTextarea1" class="form-label">photo</label>
                <input type="file" name="photo" class="form-control"></input>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Post</button>
    </div>
</form>

</body>
</html>