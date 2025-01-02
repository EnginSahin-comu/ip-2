<?php

namespace App\Http\Controllers;

use App\Models\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::where('status', 'Active')->get();
        return view('pages.frontend.rewards', compact('rewards'));
    }
}
