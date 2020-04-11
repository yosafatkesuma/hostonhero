<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus =  Menu::all();
        return view('admin.menu.menu', compact('menus'))->with('i', (request()->input(1)));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate posted form data
        $validated = $request->validate([
            'nama' => 'required|string|min:3|max:20',
            'isi' => 'required|string',
        ]);

        // Create and save post with validated data
        Menu::create($validated);
        
        // Redirect the user to the created post with a success notification
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.edit',compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required',
            'isi' => 'required',
        ]);

        $menu->update($request->all());

        return redirect()->route('menu.index');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
