<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index ()
    {

        if(Carbon::parse('2021-10-10 00:00:00')->isPast() || Str::contains(''.URL::current(), 'test'))
        {
            return view('pages.index');
        }


        return view('pages.stub');
    }
}
