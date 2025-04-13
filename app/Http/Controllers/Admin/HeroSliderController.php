<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSlider;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroSliderController extends Controller
{
    public function index(HeroSection $heroSection)
    {
        return view('admin.hero-section.sliders', compact('heroSection'));
    }

    public function store(Request $request, HeroSection $heroSection)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            'order' => 'required|integer|min:0'
        ]);

        $path = $request->file('image')->store('hero-sliders', 'public');

        HeroSlider::create([
            'hero_section_id' => $heroSection->id,
            'image' => $path,
            'order' => $request->order
        ]);

        return redirect()->route('admin.hero-section.sliders.index', $heroSection->id)
            ->with('success', 'Slide added successfully.');
    }

    public function destroy(HeroSection $heroSection, HeroSlider $slider)
    {
        Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return redirect()->route('admin.hero-section.sliders.index', $heroSection->id)
            ->with('success', 'Slide deleted successfully.');
    }

    public function toggle(HeroSection $heroSection, HeroSlider $slider)
    {
        $slider->update([
            'is_active' => !$slider->is_active
        ]);

        return redirect()->route('admin.hero-section.sliders.index', $heroSection->id)
            ->with('success', 'Slide status updated successfully.');
    }
}
