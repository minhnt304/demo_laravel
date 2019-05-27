<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Company;
//use Faker\Provider\pl_PL\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CustomerController extends Controller
{
    //
    public function list(){
        $companies = Company::all();
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()-> get();
        


        /* dd($customers); */

            return view('customers', compact('activeCustomers', 'inactiveCustomers', 'companies') );
    }
    public function store()
    {
        $data = request() ->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'active'=> 'required',
                'company_id' => 'required',
            ]
        );

        Customer::create($data);

        return back();
    }
}
