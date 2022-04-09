<?php

namespace App\Http\Controllers\TranslationsApiController;

use App\Http\Controllers\Controller;
use App\Models\Translations;
use Illuminate\Http\Request;

class addTranslationsApiController extends Controller
{
    public function addTranslatePost(Request $request) {
        // $request->validate([
        //     'title'=>'required|max:255',
        //     'contents'=>'required'
        // ]);

        // $data = Translations::create([
        //     'title'=>$request->title,
        //     'contents'=>$request->contents
        // ]);

        // return $data ? response()->json([''],200) : response()->json([],403);
        
        // $data = Translations::create($this->validationFunk());
        // return response()->json($data,201);
    }

    // public function validationFunk() {
    //     return request()->validate([
    //         'title'=>'required|max:255',
    //         'contents'=>'required'
    //     ]);
    // }

}
