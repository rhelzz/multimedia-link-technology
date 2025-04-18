<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;

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

        return view('user.index', compact('heroSection'));
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
