<?php

namespace App\Http\Controllers;
use App\Chapter;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $chapitre= Chapter::all();
        return view('ModifierChapitre')->with('chapitre',$chapitre);  
    }


    public function create()
    {
       
    }


    public function store(Request $request)
    {
        Chapter::create([
            'titre'=>$request->titre,
            'book'=>$request->book,
            'date'=>$request->date,
            'url'=>$request->lien,
        ]);
        return redirect()->route('chapitres.index');  

    }


    public function show($id)
    {
        //
    }


    public function edit(Request $request)
    {
        $chapitre= Chapter::find($request->id);
    
        return view('ModificationOuvrage')->with(['chapitre' => $chapitre]);
        
    } 


    public function update(Request $request, $id)
    {
        $chapitre= Chapter::findOrFail($id);
           $chapitre->titre=$request->titre;
           $chapitre->book=$request->book;
           $chapitre->date=$request->date;
           $chapitre->url=$request->lien;
           $chapitre->save();
        return redirect()->route('chapitres.index');
    }


    public function destroy($id)
    {
        $chapitre= Chapter::findOrFail($id);

        $chapitre->delete();
        
        return redirect()->route('chapitres.index');
    }
}
