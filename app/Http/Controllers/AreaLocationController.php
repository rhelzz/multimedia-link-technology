<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\SubBranch;
use Illuminate\Http\Request;

class AreaLocationController extends Controller
{
    /**
     * Display a listing of all branches.
     */
    public function index()
    {
        $branches = Branch::where('is_active', true)->latest()->paginate(10);
        return view('user.arealocations.index', compact('branches'));
    }

    /**
     * Show sub-branches for a specific branch.
     */
    public function showSubBranches($id)
    {
        $branch = Branch::findOrFail($id);
        $subBranches = $branch->subBranches()->where('is_active', true)->latest()->paginate(10);
        return view('user.arealocations.sub-branches', compact('branch', 'subBranches'));
    }

    /**
     * Display the map modal content for a specific sub-branch.
     */
    public function showMap($id)
    {
        $subBranch = SubBranch::findOrFail($id);
        return response()->json([
            'embed_code' => $subBranch->embed_location_code,
            'location' => $subBranch->subdistrict . ', ' . $subBranch->village
        ]);
    }
}
