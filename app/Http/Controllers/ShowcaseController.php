<?php

namespace App\Http\Controllers;

use App\Models\Showcase;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index()
    {
        $showcases = Showcase::where('status', 'Active')->get();
        return view('pages.frontend.showcase', compact('showcases'));
    }
}
