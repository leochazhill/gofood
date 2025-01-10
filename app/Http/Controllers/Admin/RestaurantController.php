<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;

use Illuminate\Support\Facades\Storage;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurant.index',['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);


        $data = $request->all();
        $thumbnail = $request->file('thumbnail');
        $fileToUpload = time().$thumbnail->getClientOriginalName();
        //dd($fileToUpload);
        $destinationPath = "restaurants";
        $path = $thumbnail->storeAs($destinationPath, $fileToUpload);
        //dd($path);
        //dd($request->file('thumbnail').getClientOriginalName());
        $data['thumbnail'] = $fileToUpload;

        return Restaurant::create($data) ?
            redirect()->back()->with('success','Added!'):
            redirect()->back()->with('error','Failed!');
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
        return view('admin.restaurant.edit',['restaurant' => Restaurant::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'thumbnail' => 'mimes:jpg,png,pdf|max:2048',
        ]);

        $restaurant = Restaurant::findOrFail($id);


        $data = $request->all();
        if($request->hasFile('thumbnail')):
            $thumbnail = $request->file('thumbnail');
            $fileToUpload = time().$thumbnail->getClientOriginalName();
            //dd($fileToUpload);
            $destinationPath = "restaurants";
            $path = $thumbnail->storeAs($destinationPath, $fileToUpload);
            //dd($path);
            //dd($request->file('thumbnail').getClientOriginalName());
            $data['thumbnail'] = $fileToUpload;
        endif;

        return $restaurant->update($data) ?
            redirect()->back()->with('success','Update!'):
            redirect()->back()->with('error','Failed!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function addMenu($restaurant_id){
        $restaurant = Restaurant::findOrFail($restaurant_id);

        return view('admin.restaurant.addMenu',['restaurant' => $restaurant]);
    }

    public function storeMenu(Request $request, $restaurant_id){

        $request->validate([
            'item_name' => 'required',
            'amount' => 'required'
        ]);
        $restaurant = Restaurant::findOrFail($restaurant_id);

        return $restaurant->menus()->create($request->all()) ?
        redirect()->back()->with('success','Added!'):
        redirect()->back()->with('error','Failed!');

    }


    public function editMenu($restaurant_id,$menu_item_id){

        $restaurant = Restaurant::findOrFail($restaurant_id);
        $menuItem = Menu::findOrFail($menu_item_id);

        return view('admin.restaurant.editMenu',['restaurant' => $restaurant,'menuItem' => $menuItem]);
    }
    public function updateMenu(Request $request, $restaurant_id,$menu_item_id){
        $menuItem = Menu::findOrFail($menu_item_id);
        $request->validate([
            'item_name' => 'required',
            'amount' => 'required'
        ]
    );

        
        return $menuItem->update($request->all())?
        redirect()->back()->with('success','Updated!'):
        redirect()->back()->with('error','Failed!');
    }
    public function deleteMenu($menu_id){
        $menu = Menu::findOrFail($menu_id);
        return $menu->delete() ? 
        redirect()->back()->with('success','Menu Deleted!'):
        redirect()->back()->with('error','Failed to delete menu!');
    }
}

