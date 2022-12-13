<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\etudiant;
use App\Models\classe;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = classe::all();
        return view('addetudiant',compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*
        */
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'lieu' => 'required',
            'sexe' => 'required',
            'diplome' => 'required',
            'nomTuteur' => 'required',
            'classe_id' => 'required',
        ]);
        $etudiant = new etudiant;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->naissance = $request->naissance;
        $etudiant->lieu = $request->lieu;
        $etudiant->sexe = $request->sexe;
        $etudiant->diplome = $request->diplome;
        $etudiant->nomTuteur = $request->nomTuteur;
        $etudiant->classe_id = $request->classe_id;


        $save = $etudiant->save();

        if($save){
            return redirect(route('tabetudiant'));
        }else{
            return 'erroe!';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tabetudiant = etudiant::all();
        return view('tabetudiant',compact('tabetudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = etudiant::find($id);
        $classe = classe::all();
        return view('editetudiant',compact('etudiant','classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'lieu' => 'required',
            'sexe' => 'required',
            'diplome' => 'required',
            'nomTuteur' => 'required',
            'classe_id' => 'required',
        ]);
        $etudiant = etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->naissance = $request->naissance;
        $etudiant->lieu = $request->lieu;
        $etudiant->sexe = $request->sexe;
        $etudiant->diplome = $request->diplome;
        $etudiant->nomTuteur = $request->nomTuteur;
        $etudiant->classe_id = $request->classe_id;


        $save = $etudiant->save();

        if($save){
            return redirect(route('tabetudiant'));
        }else{
            return 'erroe!';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = etudiant::find($id);
        $delete = $etudiant->delete();

        if($delete){
            return redirect(route('tabetudiant'));
        }
    }
}
