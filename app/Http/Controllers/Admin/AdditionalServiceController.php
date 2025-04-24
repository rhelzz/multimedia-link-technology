<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdditionalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = AdditionalService::orderBy('order')->get();
        return view('admin.additional.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.additional.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            'badge' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'required|string',
            'is_active' => 'nullable', // Changed from boolean to nullable
            'order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = $imagePath;
        }

        // Handle checkbox properly
        $validated['is_active'] = $request->has('is_active');
        
        // Set default order if not provided
        $validated['order'] = $request->input('order', 0);

        AdditionalService::create($validated);

        return redirect()
            ->route('admin.additional-services.index')
            ->with('success', 'Service created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdditionalService $additionalService)
    {
        return view('admin.additional.edit', compact('additionalService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdditionalService $additionalService)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'badge' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'required|string',
            'is_active' => 'nullable', // Changed from boolean to nullable
            'order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if (Storage::disk('public')->exists($additionalService->image)) {
                Storage::disk('public')->delete($additionalService->image);
            }
            
            $imagePath = $request->file('image')->store('services', 'public');
            $validated['image'] = $imagePath;
        }

        // Handle checkbox properly
        $validated['is_active'] = $request->has('is_active');
        
        // Set default order if not provided
        $validated['order'] = $request->input('order', 0);

        $additionalService->update($validated);

        return redirect()
            ->route('admin.additional-services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdditionalService $additionalService)
    {
        if (Storage::disk('public')->exists($additionalService->image)) {
            Storage::disk('public')->delete($additionalService->image);
        }

        $additionalService->delete();

        return redirect()
            ->route('admin.additional-services.index')
            ->with('success', 'Service deleted successfully');
    }
}
