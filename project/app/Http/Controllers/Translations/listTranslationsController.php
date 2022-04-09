<?php

namespace App\Http\Controllers\Translations;

use App\Http\Controllers\Controller;
use App\Models\Translations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class listTranslationsController extends Controller
{
    public function listTranslations() {
        $translations = Translations::all();
        View::share('translations',$translations);
        return view('translations.list');
    }

    public function deleteTranslations($id) {
        $prefer = isset($_SERVER['HTTP_REFERER']);
        if(!$prefer) return redirect()->back();

        $data = Translations::find($id);

        if($data) {
            return redirect()->back()->with($data->delete() ? "success" : "error", true);
        }
        return redirect()->back();
    }

    public function viewTranslations(Request $request) {
        $translations = Translations::find($request->id);
        return $translations ?? null;
        if(!$translations) return redirect()->back()->with("not_found",true);
    }

}
