<?php

namespace App\Http\Controllers;
use App\Models\History;
use App\Models\Category;
use App\Models\Portfolio;

use Illuminate\Http\Request;

class displayController extends Controller
{
    public function index()
    {
        $data_porto = Portfolio::with('category')->get();
        $data_edu = history::where('type','education')->orderBy('end_date','desc')->get();

        $data_exp = history::where('type','experience')->orderBy('end_date','desc')->get();
        
        return view('dashboard.display.index')->with([
            'edu' => $data_edu,
            'exp' => $data_exp,
            'porto' => $data_porto
        ]);
    }
}
