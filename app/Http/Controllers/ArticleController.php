<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        $user=User::all();
        return view('/pages/article', compact('article','user'));
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

    public function store(Request $request)
    {

        $store=new Article();
        $store->titre=$request->titre;
        $store->texte=$request->texte;
        $store->user_id=Auth::id();
        $store->save();
        return redirect()->back()->with('status', "Votre article à été ajoute");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Article::find($id);
        return view('edit/articleEdit',compact('edit'));
    }

  
    public function update(Request $request,$id)
    {
        $update=Article::find($id);
        $update->titre=$request->titre;
        $update->texte=$request->texte;
        $update->user_id=Auth::id();
        $update->save();
        return redirect()->back()->with('edit',"votre article a bien ete modifie");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=Article::find($id);
        $destroy->delete();
        return redirect()->back()->with('delete',"votre article a ete supprime");
    }
}
