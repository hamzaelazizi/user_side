<?php

namespace App\Http\Controllers;
use App\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function index()
    {
        $conference=Conference::all();
        return view('ModifierConference')->with('conference',$conference);  
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        Conference::create([
            'titre'=>$request->titre,
            'conference'=>$request->conference,
            'date'=>$request->date,
            'Lieu'=>$request->lien,
            'ville'=>$request->ville,
        ]);
        return redirect()->route('conferences.index');  

    }


    public function show($id)
    {
        $conference=Conference::find($request->id);
    }


    public function edit(Request $request)
    {
        $conference=Conference::find($request->id);
    
        return view('conferences.index')->with(['conference' => $conference]);
        
    } 


    public function update(Request $request, $id)
    {
        $conference=Conference::findOrFail($id);
        $conference->titre=$request->titre;
        $conference->conference=$request->conference;
        $conference->date=$request->date;
        $conference->Lieu=$request->lien;
        $conference->ville=$request->ville;

        return redirect()->route('conferences.index');
    }


    public function destroy($id)
    {
        $conference=Conference::findOrFail($id);

        $conference->delete();
        
        return redirect()->route('conferences.index');
    }
}

