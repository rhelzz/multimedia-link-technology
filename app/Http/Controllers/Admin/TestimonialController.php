<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('order', 'asc')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'quote' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'sometimes|boolean',
            'order' => 'nullable|integer'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $data['image'] = $imagePath;
        }
        
        // Set default active status if not provided
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
        
        // Set default order if not provided
        if (empty($data['order'])) {
            $maxOrder = Testimonial::max('order');
            $data['order'] = $maxOrder ? $maxOrder + 1 : 1;
        }

        Testimonial::create($data);
        
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'quote' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'sometimes|boolean',
            'order' => 'nullable|integer'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $data['image'] = $imagePath;
        }
        
        // Handle active status
        $data['is_active'] = $request->has('is_active') ? 1 : 0;
        
        $testimonial->update($data);
        
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete the image if it exists
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }
}
