<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index(){
         $deliveries = Delivery::all();
         return view('pages.frontend.deliveries', compact('deliveries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Delivery::create([
            'user_id' => auth()->id(),
            'address' => $validated['address'],
            'city' => $validated['city'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->back()->with('success', 'Delivery details saved successfully!');
    }
}
