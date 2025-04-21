<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    /**
     * Tampilkan daftar semua fitur.
     */
    public function index()
    {
        $features = Features::all();
        return view('admin.features.index', compact('features'));
    }

    /**
     * Tampilkan formulir untuk membuat fitur baru.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Simpan fitur baru ke dalam database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Features::create($validated);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature created successfully.');
    }

    /**
     * Tampilkan formulir untuk mengedit fitur yang dipilih.
     */
    public function edit(Features $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Perbarui data fitur di database.
     */
    public function update(Request $request, Features $feature)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $feature->update($validated);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature updated successfully.');
    }

    /**
     * Hapus fitur dari database.
     */
    public function destroy(Features $feature)
    {
        $feature->delete();

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature deleted successfully.');
    }
}
