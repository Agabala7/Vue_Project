<?php

namespace App\Http\Controllers\TranslationsApiController;

use App\Http\Controllers\Controller;
use App\Models\Translations;
use Illuminate\Http\Request;

class addTranslationsApiController extends Controller
{

    public function addTranslate() {
        return view('api');
    }

    public function addTranslatePost(Request $request) {
        $request->validate([
            'title'=>'required|max:255',
            'contents'=>'required'
        ]);

        $data = Translations::create([
            'title'=>$request->title,
            'contents'=>$request->contents
        ]);

        return $data ? response()->json(['message'=>'success',$data],201) : response()->json(['message'=>'error',$data],403);
        
        $data = Translations::create($this->validationFunk());
        return response()->json($data,201);
    }

    // public function validationFunk() {
    //     return request()->validate([
    //         'title'=>'required|max:255',
    //         'contents'=>'required'
    //     ]);
    // }

}
