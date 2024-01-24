<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ControllerOldZone extends Controller
{

    public function index()
    {
        $liste_zones = Zone::all();
        return view("projets.zone", ["nos_zones"=>$liste_zones]);
    }

    // for the create page
    public function create()
    {
       return view("projets.createZone");
    }

    //in order to save data into our database
    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'libelle' => 'required'
        ]);
        $newZone = Zone::create($data);
        return redirect(route('zone.liste'));
    }


//in order to edit data
    public function edit(Zone $zone)
    {
        return view('projets.editZone', ['zone' => $zone]);
    }
    public function update(Zone $zone, Request $request)
    {
        $data = $request->validate([
            'libelle' => 'required'
        ]);
        $zone->update($data);
        return redirect(route('zone.liste'))->with('success', 'successfully updated');
    }

///in order to delete an activite
    public function delete(Zone $zone)
    {
        $zone->delete();
        return redirect(route('zone.liste'))->with('success', 'successfully deleted');
    }
}
