<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Log;

class ServicesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'label' => 'required|string|max:255',
                'price' => 'required|string|max:255',
                'features' => 'required|array',
                'features.*' => 'required|string',
            ]);

            // Handle is_favorite secara terpisah karena checkbox
            $validated['is_favorite'] = $request->has('is_favorite');

            // Buat service baru
            Service::create($validated);

            return redirect()
                ->route('admin.services.index')
                ->with('success', 'Service berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error creating service: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return back()
                ->withInput()
                ->withErrors(['error' => 'Gagal membuat service. ' . $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'label' => 'required|string|max:255',
                'price' => 'required|string|max:255',
                'features' => 'required|array',
                'features.*' => 'required|string',
            ]);

            // Handle is_favorite secara terpisah karena checkbox
            $validated['is_favorite'] = $request->has('is_favorite');

            // Update service
            $service->update($validated);

            return redirect()
                ->route('admin.services.index')
                ->with('success', 'Service berhasil diperbarui.');
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error updating service: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return back()
                ->withInput()
                ->withErrors(['error' => 'Gagal memperbarui service. ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {
            $service->delete();
            return redirect()
                ->route('admin.services.index')
                ->with('success', 'Service berhasil dihapus.');
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error deleting service: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return back()->withErrors(['error' => 'Gagal menghapus service. ' . $e->getMessage()]);
        }
    }
}
