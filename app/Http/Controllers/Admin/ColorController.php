<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index(){
        $colors = Color::latest()->paginate('10');
        return view('admin.colors.index', compact('colors'));
    }

    public function create(){
        return view('admin.colors.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'status' => 'nullable',
        ]);

        Color::create([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status  == true ? '1' : '0',
        ]);

        return redirect('admin/colors')->with('message', 'Color Successfully added');

    }

    public function edit(int $color_id){
        $color = Color::findOrFail($color_id);
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, int $color_id){
        $request->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'status' => 'nullable',
        ]);

        $color = Color::findOrFail($color_id);

        $color->update([
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status  == true ? '1' : '0',
        ]);

        return redirect('admin/colors')->with('message', 'Color Successfully Updated');

    }

    public function destroy(int $color_id){
        $color = Color::findOrFail($color_id);
        $color->delete();
        return redirect()->back()->with('message', 'Color Deleted Successfully');
    }
}

