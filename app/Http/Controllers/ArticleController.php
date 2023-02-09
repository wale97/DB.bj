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


    /*Create the function that will be added to
     the route for the pagination*/

    /*public function index()
    {
        $data = Article::paginate(3);
        return view('articles', compact('data'));
    }*/

    //Get all the articles from database

    public function voir()
    {
        
        $articles = Article::latest()->paginate(3);
        return view ('articles', ['articles'=>$articles]);
        
        /*$articles=DB::select('select * from articles');
        return view ('articles', ['articles'=>$articles]);*/
    }


    //Get one article by his id and display it on article page

    public function voir_article($id)
    {
        $article = Article::where('id', '=', $id)->first();
        if ($article->content != null)
        {
            return view('article', array('article'=>$article));
        }
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
