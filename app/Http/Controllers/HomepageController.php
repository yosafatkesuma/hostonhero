<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Menu;
use App\Model\Blog;
use App\Model\Contact;

class HomepageController extends Controller
{
    public function index(){
        $menus = Menu::all();
        $blogs = Blog::all();
        return view('global.index', compact('menus', 'blogs'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate posted form data
        $validated = $request->validate([
            'nama' => 'required|string|min:3|max:20',
            'email' => 'required|string|max:30',
            'judul' => 'required|string|min:1|max:200',
            'pesan' => 'required|string',
        ]);

        // Create and save post with validated data
        Contact::create($validated);
        
        // Redirect the user to the created post with a success notification
        return redirect()->route('index');
    }
}
