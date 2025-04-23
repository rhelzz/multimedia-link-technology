<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesAdminController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'features' => 'required|array',
            'is_favorite' => 'boolean',
        ]);

        Service::create($request->only(['name', 'label', 'price', 'features', 'is_favorite']));

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'features' => 'required|array',
            'is_favorite' => 'boolean',
        ]);

        $service->update($request->only(['name', 'label', 'price', 'features', 'is_favorite']));

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
