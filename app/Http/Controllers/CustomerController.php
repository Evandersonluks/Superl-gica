<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCustomerRequest;
use App\Models\Customer;
use App\Models\User;
use App\Services\CustomerService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a test page.
     * @return View
     */
    public function index(): View
    {
        return view('test_one.index')
            ->with('users', Customer::all());
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
        $validated = $request->validate([
            'name' => ['string', 'min:6', 'max:255'],
            'user_name' => ['string', 'min:4', 'max:255'],
            'zip_code' => ['regex:/^[0-9]{5}-[0-9]{3}$/'],
            'email' => ['email', 'max:255'],
            'password' => ['required', 'min:8', 'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'],
        ]);

        (new CustomerService())->createCustomer($validated);

        return view('test_one.index')
            ->with('users', Customer::all());
    }
}
