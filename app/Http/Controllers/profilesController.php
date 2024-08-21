<?php

namespace App\Http\Controllers;
use App\Models\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Profiles extends Controller
{
// this constructor will apply upon all pages in an easy way
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['create', 'store']);
    // }


    public function index()
    {
        $profiles= Prof::paginate(10); 
        return view('profiles', (compact('profiles')));
    }


    public function show(Request $request){

        $id = (int)$request->id; 

        $profile = Prof::find($id);
        if ($profile === null ) {
            return abort(404); 
        }

        return view('show', compact('profile'));

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
{
    $incomingFields = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:1',
        'bio' => 'required|string|max:1000'
    ]);

    $incomingFields['password'] = bcrypt($incomingFields['password']);

    Prof::create($incomingFields);

    return redirect()->route('posts.index')->with('success', 'Profile created successfully!');
}


    public function main(){
        $mainProfiles = Prof::paginate(6);
        return view('main', (compact('mainProfiles'))); 
    }
}
