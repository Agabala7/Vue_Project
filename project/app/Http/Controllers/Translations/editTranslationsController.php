<?php

namespace App\Http\Controllers\Translations;

use App\Http\Controllers\Controller;
use App\Models\Translations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class editTranslationsController extends Controller
{
    public function editTranslations($id) {
        $translate = Translations::find($id);
        if(!$translate) return redirect()->back()->with("not_found");
        return view('translations.edit', compact('translate'));
    }

    public function editTranslationsPost(Request $request) {
        $translate = Translations::find($request->id);
        if(!$translate) return redirect()->back()->with('not_found',true);

        $translate->title = $request->title;
        $translate->contents = $request->contents;

        return redirect()->back()->with($translate->save() ? "success" : "error", true);
    }
}