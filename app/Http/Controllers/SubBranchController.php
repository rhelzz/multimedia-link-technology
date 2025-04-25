<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\SubBranch;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SubBranchController extends Controller
{
    /**
     * Display a listing of the sub branches for a branch.
     */
    public function index(Branch $branch): View
    {
        $subBranches = $branch->subBranches()->latest()->paginate(10);
        return view('admin.sub-branches.index', compact('branch', 'subBranches'));
    }

    /**
     * Show the form for creating a new sub branch.
     */
    public function create(Branch $branch): View
    {
        return view('admin.sub-branches.create', compact('branch'));
    }

    /**
     * Store a newly created sub branch in storage.
     */
    public function store(Request $request, Branch $branch): RedirectResponse
    {
        $request->validate([
            'subdistrict' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'embed_location_code' => 'nullable|string',
            'whatsapp_number' => 'required|string|max:20',
        ]);

        $branch->subBranches()->create([
            'subdistrict' => $request->subdistrict,
            'village' => $request->village,
            'postal_code' => $request->postal_code,
            'embed_location_code' => $request->embed_location_code,
            'whatsapp_number' => $request->whatsapp_number,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.branches.sub-branches.index', $branch->id)
            ->with('success', 'Detail lokasi cabang berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified sub branch.
     */
    public function edit(Branch $branch, SubBranch $subBranch): View
    {
        return view('admin.sub-branches.edit', compact('branch', 'subBranch'));
    }

    /**
     * Update the specified sub branch in storage.
     */
    public function update(Request $request, Branch $branch, SubBranch $subBranch): RedirectResponse
    {
        $request->validate([
            'subdistrict' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'embed_location_code' => 'nullable|string',
            'whatsapp_number' => 'required|string|max:20',
        ]);

        $subBranch->update([
            'subdistrict' => $request->subdistrict,
            'village' => $request->village,
            'postal_code' => $request->postal_code,
            'embed_location_code' => $request->embed_location_code,
            'whatsapp_number' => $request->whatsapp_number,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.branches.sub-branches.index', $branch->id)
            ->with('success', 'Detail lokasi cabang berhasil diperbarui.');
    }

    /**
     * Remove the specified sub branch from storage.
     */
    public function destroy(Branch $branch, SubBranch $subBranch): RedirectResponse
    {
        $subBranch->delete();

        return redirect()->route('admin.branches.sub-branches.index', $branch->id)
            ->with('success', 'Detail lokasi cabang berhasil dihapus.');
    }
}
