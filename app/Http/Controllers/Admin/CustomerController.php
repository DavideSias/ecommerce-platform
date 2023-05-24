<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    private $validations = [
        'first_name'        => 'required|max:50|string',
        'last_name'         => 'required|max:50|string',
        'address'           => 'required|string',
        'phone_number'      => 'required|numeric|unique:customers',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->validations);
        $data = $request->all();

        $customer = new Customer();
        $customer->user_id = Auth::user()->id;
        $customer->first_name = $data['first_name'];
        $customer->last_name = $data['last_name'];
        $customer->address = $data['address'];
        $customer->phone_number = $data['phone_number'];
        $customer->save();

        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        if(Auth::id() !== $customer->user_id){
            return view('auth.error')->withErrors('You cannot do that');
        } else{
        return view('admin.customer.edit', compact('customer'));
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $request->validate([
            'first_name'    => 'required|max:50|string',
            'last_name'     => 'required|max:50|string',
            'address'       => 'required|string',
            'phone_number'  => [
                'required',
                'numeric',
                Rule::unique('customers')->ignore($customer->id),
            ],
        ]);

        $data = $request->all();

        $customer->user_id = Auth::user()->id;
        $customer->first_name = $data['first_name'];
        $customer->last_name = $data['last_name'];
        $customer->address = $data['address'];
        $customer->phone_number = $data['phone_number'];
        $customer->save();

        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
