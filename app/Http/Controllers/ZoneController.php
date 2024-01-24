<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_zones = Zone::all();
        return view("projets.zone", ["nos_zones"=>$liste_zones]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projets.createZone");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'libelle' => 'required'
        ]);
        $newZone = Zone::create($data);
        return redirect(route('zones.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $zone = Zone::find($id);
        return view('projets.showZone', ['zone' => $zone]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $zone = Zone::find($id);
        return view('projets.editZone', ['zone' => $zone]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'libelle' => 'required'
        ]);
        $zone = Zone::find($id);
        $zone->update($data);
        return redirect(route('zones.index'))->with('success', 'Successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Zone::find($id);
        $record->delete();
        return redirect(route('zones.index'))->with('success', 'Suppression avec succès');
    }
}
