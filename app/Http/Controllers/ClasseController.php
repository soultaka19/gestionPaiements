<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\classe;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addclasse');
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
            'nomClasse' => 'required',
            'fraisInscription' => 'required',
            'mensualite' => 'required',
            'fraisTenue' => 'required',
            'fraisAmicale' => 'required',
        ]);
        $classe = new classe;
        $classe->nomClasse = $request->nomClasse;
        $classe->fraisInscription = $request->fraisInscription;
        $classe->mensualite = $request->mensualite;
        $classe->fraisTenue = $request->fraisTenue;
        $classe->fraisAmicale = $request->fraisAmicale;

        $save = $classe->save();
        if($save){
            return redirect(route('tabclasse'));
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
        $tabclasse = classe::all();
        return view('tabclasse',compact('tabclasse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classe = classe::find($id);
        return view('editclasse',compact('classe'));
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
            'nomClasse' => 'required',
            'fraisInscription' => 'required',
            'mensualite' => 'required',
            'fraisTenue' => 'required',
            'fraisAmicale' => 'required',
        ]);
        $classe = classe::find($request->id);
        $classe->nomClasse = $request->nomClasse;
        $classe->fraisInscription = $request->fraisInscription;
        $classe->mensualite = $request->mensualite;
        $classe->fraisTenue = $request->fraisTenue;
        $classe->fraisAmicale = $request->fraisAmicale;

        $save = $classe->save();
        if($save){
            return redirect(route('tabclasse'));
        }else{
            return 'error!';
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
        $classe = classe::find($id);
        $delete = $classe->delete();

        if($delete){
            return redirect(route('tabclasse'));
        }
    }
}
