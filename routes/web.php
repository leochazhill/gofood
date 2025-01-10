<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RestaurantController as AdminRestaurantController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
   
// });

Route::get('/',[FrontPageController::class,'index']);
Route::get('/search',[FrontPageController::class,'search']);
Route::get('/searchRestaurants',[FrontPageController::class,'searchRestaurants'])->name('restaurants.search');

Route::get('/restaurant/{id}',[FrontPageController::class,'getRestaurant']);



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart/checkout',[CartController::class,'getCheckout'])->name('cart.checkout');
Route::post('/cart/checkout',[CartController::class,'saveCheckout'])->name('cart.checkout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/orders',[UserController::class,'orders'])->name('profile.orders');
});



Route::prefix('admin')->middleware(['admin','auth'])->group(function(){
    Route::resources([
            'restaurants' => AdminRestaurantController::class,
        ]);
    Route::get('restaurants/{restaurant_id}/add-menu',[AdminRestaurantController::class,'addMenu']);
    Route::put('restaurants/{restaurant_id}/add-menu',[AdminRestaurantController::class,'storeMenu']);
    
    
    Route::get('restaurants/{restaurant_id}/{menu_item_id}/edit-menu',[AdminRestaurantController::class,'editMenu']);
    Route::put('restaurants/{restaurant_id}/{menu_item_id}/update-menu',[AdminRestaurantController::class,'updateMenu']);
    Route::delete('restaurants/{menu_id}/deleteItem',[AdminRestaurantController::class,'deleteMenu']);

});



require __DIR__.'/auth.php';

