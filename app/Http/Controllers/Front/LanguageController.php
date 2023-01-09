<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function lang(Request $request) {
        session()->put('lang', $request->lang);
        return  redirect()->back();
    }
}
