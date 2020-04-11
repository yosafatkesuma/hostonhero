<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Model\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.blog', compact('blogs'))->with('i', (request()->input(1)));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function show(Blog $blog){
        return view('img', compact('blog'));
    }

    public function store(Request $request)
    {
        // dd($request);
        
        $request->validate([
            'judul' => 'required|string|min:3|max:200',
            'isi' => 'required|string',
            // 'gambar' => 'image|mimes:jpeg,png,jpg|max:200',
        ]);
        
        if($request->hasFile('gambar')){
            // return $request->gambar->getClientOriginalName()->store('public');
            // $request->gambar->store('public');
            $image = $request->file('gambar');
            $imageName = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public_uploads')->put($imageName.'.'.$extension,  File::get($image));
            // dd($image.getFilename());
            $form_data = array(
                'judul'      => $request->judul,
                'isi'        => $request->isi,
                'gambar'     => $imageName.'.'.$extension,
            );
        } else {
            $form_data = array(
                'judul'      => $request->judul,
                'isi'        => $request->isi,
            );
        }

        Blog::create($form_data);
        // dd($form_data);
        return redirect()->route('blog.index');
    }

    public function edit(Blog $blog)
    {
        // dd($blog->gambar);
        return view('admin.blog.edit',compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'judul' => 'required|string|min:3|max:200',
            'isi' => 'required|string',
            // 'gambar' => 'image|mimes:jpeg,png,jpg|max:200',
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public_uploads')->put($imageName.'.'.$extension,  File::get($image));
            // dd($image.getFilename());
            $form_data = array(
                'judul'      => $request->judul,
                'isi'        => $request->isi,
                'gambar'     => $imageName.'.'.$extension,
            );
        } else {
            $form_data = array(
                'judul'      => $request->judul,
                'isi'        => $request->isi,
            );
        }


        $blog->update($form_data);

        return redirect()->route('blog.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
