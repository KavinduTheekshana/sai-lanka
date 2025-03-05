<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.home.index', compact('testimonials'));
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function testimonial()
    {
        $testimonials = Testimonial::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.testimonial.index', compact('testimonials'));
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return back()->with('success', 'Name updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }
}
