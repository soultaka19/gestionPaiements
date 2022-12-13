<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\etudiant;
use App\Models\caissier;
use App\Models\encaisser;

class EncaisserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caissier = caissier::all();
        $etudiant = etudiant::all();
        return view('addencaisser',compact('caissier','etudiant'));
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

        $request->validate([
            'caissier_id' => 'required',
            'etudiant_id' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'heureEncaisse' => 'required',
            'nom_etudiant' => 'required',
            'prenom_etudiant' => 'required',
            'nomTuteur_etudiant' => 'required',
        ]);
        $encaisser = new encaisser;
        $encaisser->caissier_id = $request->caissier_id;
        $encaisser->etudiant_id = $request->etudiant_id;
        $encaisser->dateDebut = $request->dateDebut;
        $encaisser->dateFin = $request->dateFin;
        $encaisser->heureEncaisse = $request->heureEncaisse;
        $encaisser->nom_etudiant = $request->nom_etudiant;
        $encaisser->prenom_etudiant = $request->prenom_etudiant;
        $encaisser->nomTuteur_etudiant = $request->nomTuteur_etudiant;


        $save = $encaisser->save();

        if($save){
            return redirect(route('tabencaisser'));
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
        $tabencaisser = encaisser::all();
        return view('tabencaisser',compact('tabencaisser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encaisser = encaisser::find($id);
        $etudiant = etudiant::all();
        $caissier = caissier::all();
        return view('editencaisser',compact('encaisser','etudiant','caissier'));
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
            'caissier_id' => 'required',
            'etudiant_id' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'heureEncaisse' => 'required',
            'nom_etudiant' => 'required',
            'prenom_etudiant' => 'required',
            'nomTuteur_etudiant' => 'required',
        ]);
        $encaisser =  encaisser::find($request->id);
        $encaisser->caissier_id = $request->caissier_id;
        $encaisser->etudiant_id = $request->etudiant_id;
        $encaisser->dateDebut = $request->dateDebut;
        $encaisser->dateFin = $request->dateFin;
        $encaisser->heureEncaisse = $request->heureEncaisse;
        $encaisser->nom_etudiant = $request->nom_etudiant;
        $encaisser->prenom_etudiant = $request->prenom_etudiant;
        $encaisser->nomTuteur_etudiant = $request->nomTuteur_etudiant;


        $save = $encaisser->save();

        if($save){
            return redirect(route('tabencaisser'));
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
        $encaisser = encaisser::find($id);
        $delete = $encaisser->delete();

        if($delete){
            return redirect(route('tabencaisser'));
        }
    }
}
