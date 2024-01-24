<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;


class ProjetController extends Controller
{
    public function index()
    {
        $liste_projets = Projet::all();
        return view("projets.liste", ["nos_projets"=>$liste_projets]);
    }

    public function create()
    {
       return view("projets.create");
    }

//    in order to save data into our database
    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'nom' => 'required|min:2',
            'description' => 'required',
            'budget' => 'required|numeric',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'statut' => 'required|boolean'
        ]);
        $data['code'] = $this->generateCode();
//        dd($data);
        $newProjet = Projet::create($data);
        return redirect(route('projets.liste'));
    }

//    in order to update data
    public function edit(Projet $projet)
    {
        return view('projets.edit', ['projet' => $projet]);
    }

    public function update(Projet $projet, Request $request)
    {
        $data = $request->validate([
//            'code' => 'required|unique:projets',
            'nom' => 'required',
            'description' => 'required',
            'budget' => 'required|numeric',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'statut' => 'required|boolean'
        ]);
        $projet->update($data);
        return redirect(route('projets.liste'))->with('success', 'successfully updated');
    }

    //in order to delete a data
    public function delete(Projet $projet)
    {
        $projet->delete();
        return redirect(route('projets.liste'))->with('success', 'successfully deleted');
    }

    function generateCode()
    {
        return "@ISi" . rand(0, 9);
    }

}
