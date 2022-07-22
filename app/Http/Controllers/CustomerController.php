<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a test page.
     * @return View
     */
    public function index(): View
    {
        return view('test_one.index')
            ->with('users', User::all());
    }

    /**
     * Create a new customer.
     * @param Request $request Request object.
     * @return View
     */
    public function create(Request $request): View
    {
        return view('test_one.create');
    }

    /**
     * Store a new customer.
     * @param Request $request Request object.
     * @return View
     */
    public function store(Request $request): View
    {
        User::create($request->all());
        return view('test_one.index')
            ->with('users', User::all());
    }
}
