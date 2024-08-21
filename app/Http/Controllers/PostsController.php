<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Posts::paginate(20);

        return view('posts.posts', compact('posts')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $comingField = $request->validated();
        $comingField['profile_id'] = auth()->user()->id;
    
        if ($photo = $request->file('photo')) {
            // Store the file in storage/app/public/images
            $path = $photo->store('images', 'public');
            $comingField['photo'] = basename($path); // Only store the filename
        }
    
        Posts::create($comingField);


    
        return to_route('posts.index');
    }





    public function search(Request $request)
{
    $query = $request->input('query');
    
    // Search in the title or body of posts
    $posts = Posts::where('title', 'like', "%$query%")
                 ->orWhere('body', 'like', "%$query%")
                 ->get();

    // Return search results to a view
    return view('posts.search-results', compact('posts', 'query'));
}
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        
        if ($post === null ) {
            return abort(404); 
        }



        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        $posts->delete();
        
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');

    }


}
