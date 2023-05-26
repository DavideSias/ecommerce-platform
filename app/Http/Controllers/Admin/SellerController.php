<?php

namespace App\Http\Controllers\Admin;

use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    private $validations = [
        'name'             => 'required|max:50|string',
        'logo_image'       => 'url',
        'cover_image'      => 'url',
        'vat_number'       => 'required|numeric|digits:11|unique:sellers',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $seller = $user->seller;
        return view('admin.seller.index', [
            'seller' => $seller,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seller.create');
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

        $seller = new Seller();
        $seller->user_id = Auth::user()->id;
        $seller->name = $data['name'];
        $seller->slug = Seller::getSlug($data['name']);
        $seller->vat_number = $data['vat_number'];
        $seller->logo_image = $data['logo_image'];
        $seller->cover_image = $data['cover_image'];
        $seller->save();

        return redirect()->route('admin.seller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        if(Auth::id() !== $seller->user_id){
            return view('auth.error')->withErrors('You cannot do that');
        } else{
        return view('admin.seller.edit', compact('seller'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $request->validate([
            'name'             => 'required|max:50|string',
            'logo_image'       => 'url',
            'cover_image'      => 'url',
            'vat_number'       => [
                'required',
                'numeric',
                'digits:11',
                Rule::unique('sellers')->ignore($seller->id),
            ],
        ]);

        $data = $request->all();

        $seller->user_id = Auth::user()->id;
        $seller->name = $data['name'];
        $seller->slug = Seller::getSlug($data['name']);
        $seller->logo_image = $data['logo_image'];
        $seller->cover_image = $data['cover_image'];
        $seller->vat_number = $data['vat_number'];
        $seller->save();

        return redirect()->route('admin.seller.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
