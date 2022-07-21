<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a test page.
     *
     * @return View
     *
     */
    public function index(): View
    {
        return view('test_three.index');
    }
}
