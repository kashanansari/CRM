<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getrenewals', [userController::class, 'get_renewals']);

Route::post('id', [userController::class, 'getid']);
Route::post('/checkin', [userController::class, 'check_in']);

Route::post('/attendance', [userController::class, 'CheckInout']);

Route::post('/attend', [userController::class, 'manageAttendance']);
Route::get('/getallattend', [userController::class, 'get_all_record']);
Route::get('/alldatalogs', [userController::class, 'view_all_datalogs']);
Route::get('/getReg/{customer_name}', [userController::class, 'get_Reg_No']);
Route::get('/date', [userController::class, 'getcurrenttime']);
Route::get('/all_device_inventory', [userController::class, 'all_inventory']);
Route::get('/active_devices', [userController::class, 'active_devices']);
Route::get('/inactive_devices', [userController::class, 'inactive_devices']);
Route::get('/inactive_devices', [userController::class, 'inactive_devices']);
Route::get('/chunk', [userController::class, 'chunk']);
Route::get('/alll', [userController::class, 'sms']);
Route::get('/all', [userController::class, 'view_all_data_logs']);
Route::get('/jj', [userController::class, 'joins']);
// Route::get('/dollar_rate', [userController::class, 'dollar_rate']);


Route::post('/forget', [userController::class, 'create_forgetpass']);


Route::get('/getforget', [userController::class, 'get_forgetpassword']);
Route::post('/action', [userController::class, 'action_forget_password']);
Route::post('/update_device', [userController::class, 'update_device']);
Route::post('/storedata', [userController::class,  'storedata'])->name('storedata');
Route::get('/details', [userController::class,  'all_vehicle_details'])->name('details');
