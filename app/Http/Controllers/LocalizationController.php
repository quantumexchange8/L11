<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        // if (!in_array($locale, ['en', 'ar', 'zh', 'da', 'nl', 'et', 'fi', 'fr', 'de', 'ja', 'no', 'sv', 'gsw'])) {
        //     abort(400);
        // }
        

        // App::setLocale($locale);
        // Session::put("locale", $locale);

        // return back();
        App::setLocale($locale);
        $currentLocale = App::getLocale();
        Session::put("locale", $locale);
        
        return view('home', compact('currentLocale'));
    }

}