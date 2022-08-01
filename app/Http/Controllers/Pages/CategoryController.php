<?php

namespace App\Http\Controllers\Pages;

use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller{

    public function index(){
        $threads=DB::table('threads') ->leftjoin('categories','categories.id','=','threads.category_id')
        ->select('threads.*','categories.name as catName')
        ->get();
        return view('pages.categories.index')->with('threads',$threads); 
    }

}