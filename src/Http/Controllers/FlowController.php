<?php

namespace Vishwaraj\Laraflow\Http\Controllers;

use Illuminate\Routing\Controller;

class FlowController extends Controller
{
    public function create()
    {
        return view('laraflow::create');
    }
}
