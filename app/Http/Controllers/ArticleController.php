<?php

namespace App\Http\Controllers;

use Paginate;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    /*public function articles()
    {
        return view ('articles');
    }*/

    /*public function articlepaginate(){
        $articles = Article::latest()->paginate(3);
        return view('article', compact('articles'));
    }*/

    public function index()
    {
        //
    }

    public function voir()
    {
        $articles=DB::select('select * from articles');
        return view ('articles', ['articles'=>$articles]);
    }

    public function voir_article($id)
    {
        $article = Article::where('id', '=', $id)->first();
        if ($article->content != null)
        {
            return view('article', array('article'=>$article));
        }
    }

   /* public function find($id){
        $articles=self::voir();
        foreach($articles as $article){
            if ($article['id']==$id){
                return $article;
            }
        }
    }*/

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
