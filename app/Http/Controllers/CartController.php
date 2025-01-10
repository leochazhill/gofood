<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = session()->get('cart', []);
        //session()->forget('cart');
        //return $cartItems;
        $totalPrice = array_reduce($cartItems, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);

        
        
        return response()->json([
            'cartItems' => $cartItems, 
            'totalPrice' => $totalPrice
        ]);
        //return response()->json(compact('cartItems', 'totalPrice'));

        //return view('cart.index', compact('cartItems', 'totalPrice'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
        // $item = $request->only('id', 'name', 'price'); 
        // $item['quantity'] = 1;

        // $cart = session()->get('cart', []);
        // $cart[$item['id']] = $item;

        // session()->put('cart', $cart);


        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'quantity' => 'required|decimal:0,2',
            'restaurant_id' => 'required',
        ]);


        $cart = Session::get('cart', []);
        $itemId = $request->input('id');
        $itemName = $request->input('name');
        $itemPrice = $request->input('price');
        $quantity = $request->input('quantity', 1);

        $restaurant_id = $request->input('restaurant_id');

        
      
        
       

        // Check if the item is already in the cart
        if (isset($cart[$itemId])) {
            $cart[$itemId]['quantity'] += $quantity;
        } else {
            $cart[$itemId] = [
                'id' => $itemId,
                'name' => $itemName,
                'price' => $itemPrice,
                'quantity' => $quantity,
                'restaurant_id' => $restaurant_id,
                'total_price' => $itemPrice * $quantity,
            ];
        }

        // Store the cart back in the session
        Session::put('cart', $cart);

        return response()->json(['success' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cart = session()->get('cart', []);
        $cart[$request->id]['quantity'] = $request->quantity;

        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        //session()->forget($cart);
        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }

    public function getCheckout(Request $request){
        $cartItems = session()->get('cart', []);
        //session()->forget('cart');
        //return $cartItems;
        $totalPrice = array_reduce($cartItems, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);

        
        
        // return response()->json([
        //     'cartItems' => $cartItems, 
        //     'totalPrice' => $totalPrice
        // ]);

        $user = Auth::user();

        return view('cart.checkout', compact('cartItems', 'totalPrice','user'));

    }
    public function saveCheckout(Request $request){

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'street' => 'required',
            'town' => 'required',
            'postcode' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['validation'=>false,'errors'=> $validator->errors()]);
        }

        $cartItems = session()->get('cart', []);

        $cartItems_first_item_id = array_keys($cartItems)[0]; //firstItemOfCart
        $restaurant_id = $cartItems[$cartItems_first_item_id]['restaurant_id'];

        
        $data = $request->all();
        $data['restaurant_id'] = $restaurant_id;

        $data['order_items'] = serialize($cartItems);
        $data['order_total'] = 100.00;
        $data['delivery_status'] = 'pending';

       
        if($user = Auth::user()):
            $user->orders()->create($data);
            session()->forget('cart');
            $this->sendOTP($request->phone);
            //return response()->json(['user'=>$user,'data' => $data,'restaurant_id' => $restaurant_id]);
            return response()->json(['success'=>'Order made successfully!']);
        else:
            
            return response()->json(['user_logged_in'=>false]);
        endif;
        

        // return $user->orders()->create($data)?
        //     response()->json(['success' => 'Successful order made!']):
        //     response()->json(['error' => 'Failed order']);

    }

    public function sendOTP($phone){
        $args = http_build_query(array(
            'auth_token'=> '65b41c61c0672f4a4bb3d743787f50e99d9baf8f0e479ff888f87d3befc97965',
            'to'    => $phone,
            'text'  => 'GoFood:- You made an order! Your order will be delivered within 20 minutes!'));
        $url = "https://sms.aakashsms.com/sms/v3/send/";

        //Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1); ///
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // Response
        $response = curl_exec($ch);
        curl_close($ch); 
    }
}
