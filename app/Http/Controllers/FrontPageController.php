<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Builder;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $restaurants = Restaurant::all();

        return view('frontpage',['restaurants' => $restaurants]);
    }

    public function searchRestaurants(Request $request){
        $s = $request->input('s');
        $stype = $request->input('stype');
        
        $restaurants = Restaurant::whereHas('menus', function(Builder $q) use($request)  
        {
            $queryString = $request->get('s');
            $q->where('name', 'LIKE', "%$queryString%");

        })->orderBy('name')->get();


        return response()->json(['restaurants' => $restaurants]);

        //return view('search',['restaurants' => $restaurants]);
    }



    public function search(Request $request){
        $s = $request->input('s');
        $stype = $request->input('stype');
        
        $restaurants = Restaurant::whereHas('menus', function(Builder $q) use($request)  
        {
            $queryString = $request->get('s');
            $q->where('name', 'LIKE', "%$queryString%");

        })->orderBy('name')->get();

        return view('search',['restaurants' => $restaurants]);
    }

    public function getRestaurant($id){
        $restaurant = Restaurant::findOrFail($id);


        $cartItems = session()->get('cart', []);
        $totalPrice = array_reduce($cartItems, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
        
        return view('restaurant',['restaurant' => $restaurant,'cartItems'=>$cartItems,'totalPrice' => $totalPrice]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
