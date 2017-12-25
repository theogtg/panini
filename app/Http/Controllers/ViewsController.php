<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{

    public function showPrizes()
    {
        return view('prizes');
    }

    public function showRules()
    {
        return view('official-rules');
    }

    public function showWinners()
    {
        return view('past-winners');
    }

    public function showProducts()
    {
        return view('products');
    }

    public function showThanks()
    {
        return view('thanks');
    }

    public function showSorry()
    {
        return view('sorry');
    }

}