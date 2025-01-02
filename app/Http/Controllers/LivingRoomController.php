<?php

namespace App\Http\Controllers;

use App\Models\LivingRoom;
use Illuminate\Http\Request;

class LivingRoomController extends Controller
{
    // Listeleme işlemi
    public function index()
    {
        $livingRoomItems = LivingRoom::all();
        return view('living_room.index', compact('livingRoomItems'));
    }

    // Yeni ürün ekleme formunu gösterme
    public function create()
    {
        return view('living_room.create');
    }

    // Yeni ürünü kaydetme işlemi
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        LivingRoom::create($validatedData);

        return redirect()->route('living_room.index')->with('success', 'Product added successfully.');
    }

    // Belirli bir ürünü gösterme işlemi
    public function show($id)
    {
        $livingRoomItem = LivingRoom::findOrFail($id);
        return view('living_room.show', compact('livingRoomItem'));
    }

    // Ürünü düzenleme formunu gösterme
    public function edit($id)
    {
        $livingRoomItem = LivingRoom::findOrFail($id);
        return view('living_room.edit', compact('livingRoomItem'));
    }

    // Ürünü güncelleme işlemi
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $livingRoomItem = LivingRoom::findOrFail($id);
        $livingRoomItem->update($validatedData);

        return redirect()->route('living_room.index')->with('success', 'Product updated successfully.');
    }

    // Ürünü silme işlemi
    public function destroy($id)
    {
        $livingRoomItem = LivingRoom::findOrFail($id);
        $livingRoomItem->delete();

        return redirect()->route('living_room.index')->with('success', 'Product deleted successfully.');
    }
}
