<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BranchController extends Controller
{
    /**
     * Display a listing of all branches for admin.
     */
    public function index(): View
    {
        $branches = Branch::latest()->paginate(10);
        return view('admin.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new branch.
     */
    public function create(): View
    {
        return view('admin.branches.create');
    }

    /**
     * Store a newly created branch in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Branch::create([
            'name' => $request->name,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.branches.index')
            ->with('success', 'Cabang berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified branch.
     */
    public function edit(Branch $branch): View
    {
        return view('admin.branches.edit', compact('branch'));
    }

    /**
     * Update the specified branch in storage.
     */
    public function update(Request $request, Branch $branch): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $branch->update([
            'name' => $request->name,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.branches.index')
            ->with('success', 'Cabang berhasil diperbarui.');
    }

    /**
     * Remove the specified branch from storage.
     */
    public function destroy(Branch $branch): RedirectResponse
    {
        $branch->delete();

        return redirect()->route('admin.branches.index')
            ->with('success', 'Cabang berhasil dihapus.');
    }
}
