<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');

        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        echo "<pre>";
        // dd($request->all());
        info($request->all());
        print_r($request->all());
        //Insert Query
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    // public function delete($id)
    // {
    //     Customer::find($id)->delete();
    //     return redirect()->back();
    // }

    //for runtime error handling
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)){
            // not found
            return redirect('customer');
        } else {
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url', 'title');   //dollar data naam se ek variable banana hai aur usme compact karke is data ko pass kara dena hai apne add wale page par.
            return view('customer')->with($data);
        }

    }


    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->save();
        return redirect('customer/view');
    }

}
 