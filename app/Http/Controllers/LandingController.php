<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $newsind = DB::table('newsind')->leftJoin('category', function($join){$join->on('category.id','=','newsind.id_category');
        })->select('newsind.*','category.category')
        ->paginate(8);
        
        $category = DB::table('category')->take(9)->get();
        return view('landing.landing', compact('newsind'),compact('category'));
    }

    public function detail($id)
    {
        $newsind = DB::table('newsind')->where('id', $id)->first();
        $category = DB::table('category')->take(9)->get();
        return view('landing.detail', compact('newsind'),compact('category'));
    }

    public function newsall()
    {
        $newsind = DB::table('newsind')->leftJoin('category', function($join){$join->on('category.id','=','newsind.id_category');
        })->select('newsind.*','category.category')
        ->paginate(8);
        $category = DB::table('category')->take(9)->get();
        return view('landing.newsall', compact('newsind'),compact('category'));
    }

    public function getIdCat($id)
    {
        $category = DB::table('category')->take(9)->get();
        
        $categorybyID = DB::table('newsind')->where('category.id', $id)
                        ->join('category','category.id','=','newsind.id_category')
                        ->select('newsind.*', 'category.category')                        
                        ->get();

        return view('landing.bycategory', compact('categorybyID'),compact('category'));
    }

    
}
