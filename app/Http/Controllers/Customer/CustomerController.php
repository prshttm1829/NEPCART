<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerLoginRequest;
use App\Http\Requests\Customer\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function customerRegisterPage()
    {
        return view('auth.customerRegister');
    }
    public function customerRegister(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());
        Alert::success('customer registered successfully');
        return redirect(route('customerLogin'));
    }
    public function customerloginPage()
    {
        return view('auth.customerlogin');
    }
    public function customerlogin(CustomerLoginRequest $request)

    {
        // Validation already done by LoginRequest
        if (Auth::guard('customer')->attempt($request->only(
            'email',
            'password'
        ))) {
            $request->session()->regenerate();
            Alert::success('Welcome to the dashboard');
            return redirect(route('customer.dashboard'));
        }
        Alert::success('Login Credential');
        return back()->withErrors([
            'email'=>'Invalid email.',
            'password'=>'Invalid pasword.'
        ])->withInput();
    }
}
