<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Badge;
use App\Models\Service;
use App\Models\Procurement;
use App\Models\Article;

class Maincontroller extends Controller
{
    public function index(){
        $about = About::first();
        $badges = Badge::all();
        $services = Service::all();
        $procurements = Procurement::all();
        $articles = Article::all();
        return view('index',compact('about','badges','services','procurements','articles'));
    } 
}
