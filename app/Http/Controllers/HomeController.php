<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $variable = 'Hello, World!';

        $variable2 = 'This is another variable.';

        $variable3 = $variable . ' ' . $variable2;
        $variable4 = sprintf('%s %s', $variable, $variable2);

        // You can use dd() to dump and die the variable
        // dd($variable, $variable2, $variable3, $variable4);

        // show passed variables in the view
        return view('home', compact('variable', 'variable2', 'variable3', 'variable4'));
    }
}
