<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadlineController extends Controller
{
    public function showAnalyzePage()
    {
        return view('analyze-headline');
    }
}
