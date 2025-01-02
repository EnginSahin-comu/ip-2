<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MyTransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\LivingRoomController;
use App\Http\Controllers\ChildrenRoomController;
use App\Http\Controllers\DecorationController;


Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('/catalog', [FrontendController::class, 'catalog'])->name('catalog');

Route::get('/details/{slug}', [FrontendController::class, 'details'])->name('details');

Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::post('/delivery', [DeliveryController::class, 'store'])->name('delivery.store');

Route::get('/living-room', [LivingRoomController::class, 'index'])->name('living_room.index');
Route::get('/living-room/create', [LivingRoomController::class, 'create'])->name('living_room.create');
Route::post('/living-room', [LivingRoomController::class, 'store'])->name('living_room.store');
Route::get('/living-room/{id}', [LivingRoomController::class, 'show'])->name('living_room.show');
Route::get('/living-room/{id}/edit', [LivingRoomController::class, 'edit'])->name('living_room.edit');
Route::put('/living-room/{id}', [LivingRoomController::class, 'update'])->name('living_room.update');
Route::delete('/living-room/{id}', [LivingRoomController::class, 'destroy'])->name('living_room.destroy');

Route::get('/children-room', [ChildrenRoomController::class, 'index'])->name('children_room.index');
Route::get('/children-room/create', [ChildrenRoomController::class, 'create'])->name('children_room.create');
Route::post('/children-room', [ChildrenRoomController::class, 'store'])->name('children_room.store');
Route::get('/children-room/{id}', [ChildrenRoomController::class, 'show'])->name('children_room.show');
Route::get('/children-room/{id}/edit', [ChildrenRoomController::class, 'edit'])->name('children_room.edit');
Route::put('/children-room/{id}', [ChildrenRoomController::class, 'update'])->name('children_room.update');
Route::delete('/children-room/{id}', [ChildrenRoomController::class, 'destroy'])->name('children_room.destroy');

Route::get('decorations', [DecorationController::class, 'index'])->name('decorations.index');
Route::get('decorations/create', [DecorationController::class, 'create'])->name('decorations.create');
Route::post('decorations', [DecorationController::class, 'store'])->name('decorations.store');
Route::get('decorations/{id}', [DecorationController::class, 'show'])->name('decorations.show');

Route::get('/showcase', [ShowcaseController::class, 'index'])->name('showcase');

Route::get('/rewards', [RewardController::class, 'index'])->name('rewards');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('products', ProductController::class)->only(['index', 'store', 'update', 'destroy']);
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
    Route::post('/cart/{id}', [FrontendController::class, 'cartAdd'])->name('cart-add');
    Route::delete('/cart/{id}', [FrontendController::class, 'cartDelete'])->name('cart-delete');

    Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/success', [FrontendController::class, 'success'])->name('checkout-success');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('my-transaction', MyTransactionController::class)->only([
        'index', 'show'
    ]);


    Route::middleware(['admin'])->group(function () {
        Route::resource('product', ProductController::class);
        Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
            'index', 'create', 'store', 'destroy'
        ]);
        Route::resource('transaction', TransactionController::class)->only([
            'index', 'show', 'edit', 'update'
        ]);
        Route::resource('user', UserController::class)->only([
            'index', 'edit', 'update', 'destroy'
        ]);
    });
});
