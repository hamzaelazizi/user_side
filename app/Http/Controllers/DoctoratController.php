<?php

namespace App\Http\Controllers;
use App\Doctorat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DoctoratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doctorat=Doctorat::all();
        return view('ModifierDoctorat')->with('doctorat',$doctorat);
    }



    public function store(Request $request)
    {
        Doctorat::create([
            'titre'=>$request->titre,
            //'doctorant'=>$request->doctorant,
            'doctorant'=>"null",
            'date'=>$request->date,
           // 'encadrant'=>Auth::user()->profID,
            'encadrant'=>"null",
        ]);

        return redirect()->route('doctorats.index');  
  
    }


    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $doctorat=Doctorat::find($request->id);
    
        return view('ModificationDoctorat')->with(['doctorat' => $doctorat]);
        
    } 


    public function update(Request $request, $id)
    {
        $doctorat=Doctorat::findOrFail($id);;
           $doctorat->titre=$request->titre;
           $doctorat->date=$request->date;
           $doctorat->save();
           return redirect()->route('doctorats.index');
    }

    public function destroy($id)
    {
        $doctorat=Doctorat::findOrFail($id);

        $doctorat->delete();
        
        return redirect()->route('doctorats.index');
    }
}
