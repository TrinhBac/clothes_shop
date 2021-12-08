<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\User;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
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
        CartItem::where(['cart_id' => $request->cart_id, 'product_id' => $request->product_id])->delete();
        $cart_item = new CartItem();
        $cart_item->cart_id = $request->cart_id;
        $cart_item->product_id = $request->product_id;
        $cart_item->amount = $request->amount;
        $cart_item->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart_item = CartItem::findOrFail($id);
        $cart_item->amount = $request->amount;
        $cart_item->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart_item = CartItem::findOrFail($id);
        $cart_item->delete();

        return redirect()->back();
    }
}
