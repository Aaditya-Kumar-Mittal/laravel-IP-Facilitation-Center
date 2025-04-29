<?php

namespace App\Http\Controllers;

use App\Models\IPR;
use Illuminate\Http\Request;

class IPRController extends Controller
{
    // Show all records (current user only)
    public function index()
    {
        $iprs = auth()->user()->iprs;
        return view('index', compact('iprs'));
    }

    // Show form to create new record
    public function create()
    {
        return view('create');
    }

    // Store new record (with user_id)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'application_date' => 'required|date',
        ]);

        IPR::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'application_date' => $request->application_date,
            'user_id' => auth()->id(), 
        ]);

        return redirect()->route('iprs.index')->with('success', 'Record added successfully!');
    }

    // Show edit form
    public function edit(IPR $ipr)
    {
        $this->authorizeAccess($ipr);
        return view('edit', compact('ipr'));
    }

    // Update existing record
    public function update(Request $request, IPR $ipr)
    {
        $this->authorizeAccess($ipr);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'application_date' => 'required|date',
        ]);

        $ipr->update($request->only('title', 'description', 'type', 'application_date'));

        return redirect()->route('iprs.index')->with('success', 'Record updated successfully!');
    }

    // Delete a record
    public function destroy(IPR $ipr)
    {
        $this->authorizeAccess($ipr);
        $ipr->delete();

        return redirect()->route('iprs.index')->with('success', 'Record deleted successfully!');
    }

    // ✅ Helper method to restrict access to only the owner of the record
    private function authorizeAccess(IPR $ipr)
    {
        if ($ipr->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
