<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCustomer()
    {
        $user = Auth::user();
        $customer = $user->customer;
        //dd($customer);

        $orders = null;
        if ($customer != null && $customer->orders != null) {
            $orders = Order::where('customer_id', $customer->id)->get();
            return view('admin.orders.indexCustomer', compact('orders'));
        }else {
            return view('admin.orders.indexCustomer', compact('orders'));
        }

    }
    public function indexSeller()
    {
        $user = Auth::user();
        $seller = $user->seller;
        $orders = null;

        if($seller != null){

            $orders = DB::table('orders')
            ->select(DB::raw('COUNT(order_id) as order_id, orders.note, orders.tot_price, orders.created_at, orders.customer_id'))
            ->join('item_order','orders.id','=','item_order.order_id')
            ->join('items','item_id','=','items.id')
            ->where('seller_id','=',$seller->id)
            ->groupBy('order_id')
            ->get();

            return view('admin.orders.indexSeller', compact('orders'));
        } else {
            return view('admin.orders.indexSeller', compact('orders'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
