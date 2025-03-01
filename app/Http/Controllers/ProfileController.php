<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $userId = Auth::id();

        $request->validate([
            'profile_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:profiles,email,' . $userId . ',user_id',
            'description' => 'nullable|string',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'occupation' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'birthplace' => 'nullable|string|max:255',
            'favourite_tv_shows' => 'nullable|string|max:500',
            'favourite_music' => 'nullable|string|max:500',
            'favourite_movies' => 'nullable|string|max:500',
            'favourite_games' => 'nullable|string|max:500',
            'job_title' => 'nullable|string|max:255',
            'job_year_started' => 'nullable|integer|min:1900|max:' . date('Y'),
            'job_year_end' => 'nullable|integer|gte:job_year_started|max:' . date('Y'),
            'job_description' => 'nullable|string|max:1000',
        ]);

        // Only take allowed fields to prevent mass assignment vulnerabilities
        $data = $request->only([
            'profile_name', 'email', 'description', 'country', 'city', 'birthday',
            'occupation', 'status', 'birthplace', 'favourite_tv_shows', 'favourite_music',
            'favourite_movies', 'favourite_games', 'job_title', 'job_year_started',
            'job_year_end', 'job_description'
        ]);

        // Update or create profile
        Profile::updateOrCreate(
            ['user_id' => $userId],
            $data
        );

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

}
