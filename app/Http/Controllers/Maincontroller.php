<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Badge;
use App\Models\Service;
use App\Models\Procurement;
use App\Models\Article;
use TCG\Voyager\Traits\Translatable;

class Maincontroller extends Controller
{
    public function index(){
        $locale = session('locale');
        if($locale == null) {
            App::setLocale('ru');
        }
        else {
            App::setLocale($locale);
        }

        $about = About::first()->translate($locale, 'ru');
        $badges = Badge::all()->translate($locale, 'ru');
        $services = Service::all()->translate($locale, 'ru');
        $procurements = Procurement::all()->translate($locale, 'ru');
        $articles = Article::all()->translate($locale, 'ru');
        return view('index',compact('about','badges','services','procurements','articles'));
    } 
}
