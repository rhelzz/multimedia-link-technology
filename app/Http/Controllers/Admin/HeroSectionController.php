<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('admin.hero-section.index', compact('heroSections'));
    }

    public function create()
    {
        return view('admin.hero-section.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'price_text' => 'required|string|max:255',
            'feature_tags' => 'required|string',
            'customer_rating' => 'required|string|max:255',
            'active_customers' => 'required|string|max:255',
            'money_guarantee' => 'required|string|max:255',
        ]);

        // Convert feature tags from comma-separated string to array
        $featureTags = array_map('trim', explode(',', $validated['feature_tags']));

        HeroSection::create([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'description' => $validated['description'],
            'price_text' => $validated['price_text'],
            'feature_tags' => $featureTags,
            'customer_rating' => $validated['customer_rating'],
            'active_customers' => $validated['active_customers'],
            'money_guarantee' => $validated['money_guarantee'],
        ]);

        return redirect()->route('admin.hero-section.index')
            ->with('success', 'Hero section created successfully.');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero-section.edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'price_text' => 'required|string|max:255',
            'feature_tags' => 'required|string',
            'customer_rating' => 'required|string|max:255',
            'active_customers' => 'required|string|max:255',
            'money_guarantee' => 'required|string|max:255',
        ]);

        // Convert feature tags from comma-separated string to array
        $featureTags = array_map('trim', explode(',', $validated['feature_tags']));

        $heroSection->update([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'description' => $validated['description'],
            'price_text' => $validated['price_text'],
            'feature_tags' => $featureTags,
            'customer_rating' => $validated['customer_rating'],
            'active_customers' => $validated['active_customers'],
            'money_guarantee' => $validated['money_guarantee'],
        ]);

        return redirect()->route('admin.hero-section.index')
            ->with('success', 'Hero section updated successfully.');
    }

    public function destroy(HeroSection $heroSection)
    {
        // Note: Related slider images will be automatically deleted
        // due to the onDelete('cascade') in the migration
        $heroSection->delete();
        
        return redirect()->route('admin.hero-section.index')
            ->with('success', 'Hero section deleted successfully.');
    }
}
