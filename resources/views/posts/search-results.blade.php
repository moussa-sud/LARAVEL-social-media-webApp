<!-- resources/views/posts/search-results.blade.php -->
@extends('components.layout')

@section('content')
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>

        @if($posts->isEmpty())
            <p>No posts found.</p>
        @else
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ asset('storage/images/' . $post->photo) }}" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->body, 100) }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
