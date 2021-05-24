<?php

namespace App\Http\Controllers;
use App\Ouvrage;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{

    public function index()
    {
        $ouvrage=Ouvrage::all();
        return view('ModifierOuvrage')->with('ouvrage',$ouvrage);  
    }



    public function create()
    {
        return view('ModifierOuvrage');
    }


    public function store(Request $request)
    {
        Ouvrage::create([
            'titre'=>$request->titre,
            'date'=>$request->date,
            'isbn'=>$request->isbn,
            'issn'=>$request->issn,
            'publisher'=>$request->publisher,
        ]);
        return redirect()->route('ouvrages.index');  

    }


    public function show($id)
    {
        //
    }


     public function edit(Request $request)
    {
        $ouvrage = Ouvrage::find($request->id);
    
        return view('ModificationOuvrage')->with(['ouvrage' => $ouvrage]);
        
    } 



    public function update(Request $request, $id)
    {
        $ouvrage = Ouvrage::findOrFail($id);
        $ouvrage->titre=$request->titre;
        $ouvrage->date=$request->date;
        $ouvrage->isbn=$request->isbn;
        $ouvrage->issn=$request->issn;
        $ouvrage->publisher=$request->publisher;
        $ouvrage->save();
        return redirect()->route('ouvrages.index');
    }


    public function destroy($id)
    {
        $ouvrage=Ouvrage::findOrFail($id);

        $ouvrage->delete();
        
        return redirect()->route('ouvrages.index');
    }
}
