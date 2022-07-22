<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class SaveCustomerRequest extends Request
{
    /**
     * Base rules for both creating and editing the resource.
     * @return array
     */
    public function baseRules()
    {
        return [
            'name' => ['string', 'min:6', 'max:255'],
            'userName' => ['string', 'min:4', 'max:255'],
            'email' => ['email', 'max:255'],
            'document' => ['regex:/^[0-9]{5}-[0-9]{3}$/'],
            'password' => ['required', 'min:8', 'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'],
        ];
    }
}
