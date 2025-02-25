<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.home.index', compact('testimonials'));
    }
}
