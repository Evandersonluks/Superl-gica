<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerService {

    /**
     * Create a new customer.
     * @param array<int, string> $data Customer data.
     * @return Customer
     */
    public function createCustomer(array $data): Customer {
        $customer = new Customer();
        $customer->name = $data['name'];
        $customer->email = $data['email'];
        $customer->user_name = $data['user_name'];
        $customer->zip_code = $data['zip_code'];
        $customer->password = Hash::make($data['password']);
        $customer->save();

        return $customer;
    }
}
