<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $article=Article::all();
        return view('ModifierArticle')->with('article',$article);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Article::create([
            'titre'=>$request->titre,
            'journal'=>$request->journal,
            'date'=>$request->date,
            'if'=>$request->if,
            'indexe'=>$request->indexe,
            'url'=>$request->lien,
            'volume'=>$request->volume,
        ]);
        return redirect()->route('articles.index');
        
    }


    public function show($id)
    {
        //
    }


    public function edit(Request $request)
    {
        $article=Article::find($request->id);
    
        return view('ModificationArticle')->with(['article' => $article]);
        
    } 

    public function update(Request $request, $id)
    {
        $article=Article::find($request->id);
           $article->titre=$request->titre;
           $article->journal=$request->journal;
           $article->date=$request->date;
           $article->if=$request->if;
           $article->indexe=$request->indexe;
           $article->url=$request->lien;
           $article->volume=$request->volume;
           $article->save();
           return view('articles.index');
    }


    public function destroy($id)
    {
        $article=Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
