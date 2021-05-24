<?php

namespace App\Http\Controllers;
use App\Manifestation;
use Illuminate\Http\Request;

class ManifestationController extends Controller
{

    public function index()
    {
        $manifestation=Manifestation::all();
        return view('ModifierManifestation')->with('manifestation',$manifestation);   
    }



    public function store(Request $request)
    {
        Manifestation::create([
            'titre'=>$request->titre,            
            'type'=>$request->type,            
            'date'=>$request->date,            
            'lien'=>$request->lien,
        ]);
        return redirect()->route('manifestations.index');  
  
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $manifestation=Manifestation::find($request->id);
    
        return view('ModificationManifestation')->with(['manifestation' => $manifestation]);
        
    } 


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $manifestation=Manifestation::findOrFail($id);
        $manifestation->titre=$request->titre;  
            $manifestation->type=$request->type;            
            $manifestation->date=$request->date;            
            $manifestation->lieu=$request->lien;
        $manifestation->delete();
        
        return redirect()->route('manifestations.index');
    }
}
