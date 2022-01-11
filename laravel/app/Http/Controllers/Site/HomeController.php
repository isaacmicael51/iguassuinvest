<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $headers = ['category' => 'PAINEL', 'title' => 'PAINEL'];
        return view('index', compact('headers'));
    }
}
