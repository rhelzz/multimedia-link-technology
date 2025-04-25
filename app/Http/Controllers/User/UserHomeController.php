<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Features;
use App\Models\HeroSection;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Ambil data hero section pertama atau yang terakhir dibuat
         $heroSection = HeroSection::with(['sliders' => function($query) {
            $query->where('is_active', true)
                  ->orderBy('order');
        }])->first();

        $features = DB::table('features')->limit(4)->get(); // Ambil hanya 4 fitur

        $services = Service::all();

        $additionalServices = AdditionalService::where('is_active', true)->orderBy('order')->get();

        $partners = Partner::where('is_active', true)->orderBy('order')->get();

        $testimonials = Testimonial::where('is_active', 1)->orderBy('order', 'asc')->get();

        $faqs = Faq::where('is_active', true)->orderBy('order')->get();

        $contact = Contact::where('is_active', true)->first();

        return view('user.index', compact('heroSection', 'features', 'services', 'additionalServices', 'partners', 'testimonials', 'faqs', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
