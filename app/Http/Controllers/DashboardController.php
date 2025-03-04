<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function profile()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('frontend.dashboard.profile', compact('profile'));
    }

    public function account()
    {
        return view('frontend.dashboard.account');
    }
}
