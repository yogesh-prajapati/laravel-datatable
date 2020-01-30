<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getCustomers()
    {
        $query = Customer::select('id','first_name', 'last_name', 'email','city');
        return datatables($query)
                ->addColumn('action', function($customer){
                          return (string) view('options', ['id' => $customer->id]);
                    })
                ->make(true);
    }

}
