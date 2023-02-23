<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function getComic(){
        $fumetti = Comic::all();
        $nav_menu = config('db.nav');
        $icons  =config('db.social_icons');
        return view('home', compact('fumetti', 'nav_menu', 'icons'));
    }

    // public function getSingleComic($id){
    //     $fumetti = Comic::find($id);
    //     $icons  =config('db.social_icons');
    //     $nav_menu = config('db.nav');
       
       
    //    $single= ['single'=>$fumetti];
    
    
    //     return view('details_fumetto', $single, compact('single', "icons", "nav_menu"));
    // }

    public function getComicBySlug($slug){
        $fumetti = Comic::where('slug', $slug)->get();
        $icons  =config('db.social_icons');
        $nav_menu = config('db.nav');
       
        $fumetti = $fumetti[0];
        $single= ['single'=>$fumetti];
    
    
        return view('details_fumetto', $single, compact('single', "icons", "nav_menu"));
    }

   
}
