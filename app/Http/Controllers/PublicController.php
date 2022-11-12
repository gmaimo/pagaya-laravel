<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Category;

class PublicController extends Controller
{
    public function index(){
        $ads = Ad::where('is_accepted',true)->orderBy('created_at','desc')->take(6)->get();

        return view('index',compact('ads'));
    }

    public function adsByCategory (Category $category){

        $ads = $category->ads()->where('is_accepted',true)->latest()->paginate(6);
        return view('ads.by-category',compact('category','ads'));

    }

    public function setLocale($locale){
        session()->put('locale',$locale);
        return redirect()->back();
    }
}
