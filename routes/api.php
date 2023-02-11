<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FatorahController;
use App\Http\Controllers\API\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::get('/home',[HomeController::class,'index']);




Route::middleware(['jwt.verify'])->group(function () {
    
Route::post('payment/{id}', [fatorahController::class,'payorder'])->name('payment');
Route::get('Callback', [fatorahController::class,'Callback']);
Route::get('error',[fatorahController::class,'error']);

}); 


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
