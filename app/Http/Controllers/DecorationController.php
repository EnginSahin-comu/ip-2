<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use Illuminate\Http\Request;

class DecorationController extends Controller
{
    public function index()
    {
        $decorations = Decoration::all();
        return view('decoration.index', compact('decorations'));
    }

    public function create()
    {
        return view('decoration.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|url',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Decoration::create($request->all());

        return redirect()->route('decoration.index');
    }

    public function show($id)
    {
        $decoration = Decoration::findOrFail($id);
        return view('decoration.show', compact('decoration'));
    }
}
