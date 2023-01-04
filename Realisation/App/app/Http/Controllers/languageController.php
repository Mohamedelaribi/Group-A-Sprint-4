<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languageController extends Controller
{
    //

    public function change(Request $request){
        session()->put('locale', $request->lang);
        return redirect()->back();

    }
}
