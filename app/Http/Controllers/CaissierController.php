<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\caissier;

class CaissierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addcaissier');
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
            'nomCaisse' => 'required',
            'prenomCaisse' => 'required',
            'niveau' => 'required',
        ]);
        $caissier = new caissier;
        $caissier->nomCaisse = $request->nomCaisse;
        $caissier->prenomCaisse = $request->prenomCaisse;
        $caissier->niveau = $request->niveau;

        $save = $caissier->save();

        if($save){
            return redirect(route('tabcaissier'));
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
        $tabcaissier = caissier::all();
        return view('tabcaissier',compact('tabcaissier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caissier = caissier::find($id);
        return view('editcaissier',compact('caissier'));
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
            'nomCaisse' => 'required',
            'prenomCaisse' => 'required',
            'niveau' => 'required',
        ]);
        $caissier =  caissier::find($request->id);
        $caissier->nomCaisse = $request->nomCaisse;
        $caissier->prenomCaisse = $request->prenomCaisse;
        $caissier->niveau = $request->niveau;

        $save = $caissier->save();

        if($save){
            return redirect(route('tabcaissier'));
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
        $caissier = caissier::find($id);
        $delete = $caissier->delete();

        if($delete){
            return redirect(route('tabcaissier'));
        }
    }
}
