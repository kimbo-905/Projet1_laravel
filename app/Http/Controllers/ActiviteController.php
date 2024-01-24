<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{

    public function index()
    {
        $liste_activites = Activite::all();
        return view("projets.activite", ["nos_activites"=>$liste_activites]);
    }

    // for the create page
    public function create()
    {
       return view("projets.createActivite");
    }

///in order to save data into our database
    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'libelle' => 'required',
            'budget' => 'required|numeric',
            'date' => 'required|date',
            'rapport' => 'required',
            'statut' => 'required|boolean'
        ]);
        $newActivite = Activite::create($data);
        return redirect(route('activite.liste'));
    }

///in order to edit data
    public function edit(Activite $activite)
    {
        return view('projets.editActivite', ['activite' => $activite]);
    }
    public function update(Activite $activite, Request $request)
    {
        $data = $request->validate([
            'libelle' => 'required',
            'budget' => 'required|numeric',
            'date' => 'required|date',
            'rapport' => 'required',
            'statut' => 'required|boolean'
        ]);
        $activite->update($data);
        return redirect(route('activite.liste'))->with('success', 'successfully updated');
    }

///in order to delete an activite
    public function delete(Activite $activite)
    {
        $activite->delete();
        return redirect(route('activite.liste'))->with('success', 'successfully deleted');
    }

}
