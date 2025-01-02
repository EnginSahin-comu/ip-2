<?php

namespace App\Http\Controllers;

use App\Models\ChildrenRoom;
use Illuminate\Http\Request;

class ChildrenRoomController extends Controller
{
    public function index()
    {
        $childrenRoomItems = ChildrenRoom::all();
        return view('children_room.index', compact('childrenRoomItems'));
    }

    public function create()
    {
        return view('children_room.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        ChildrenRoom::create($validatedData);

        return redirect()->route('children_room.index')->with('success', 'Product added successfully.');
    }

    public function show($id)
    {
        $childrenRoomItem = ChildrenRoom::findOrFail($id);
        return view('children_room.show', compact('childrenRoomItem'));
    }

    public function edit($id)
    {
        $childrenRoomItem = ChildrenRoom::findOrFail($id);
        return view('children_room.edit', compact('childrenRoomItem'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $childrenRoomItem = ChildrenRoom::findOrFail($id);
        $childrenRoomItem->update($validatedData);

        return redirect()->route('children_room.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $childrenRoomItem = ChildrenRoom::findOrFail($id);
        $childrenRoomItem->delete();

        return redirect()->route('children_room.index')->with('success', 'Product deleted successfully.');
    }
}
