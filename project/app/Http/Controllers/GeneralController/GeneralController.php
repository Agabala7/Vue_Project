<?php

namespace App\Http\Controllers\GeneralController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        return view('index');
    }
}
