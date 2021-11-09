<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoremIpsumController;
use App\Http\Controllers\FormContentController;

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

Route::get('/lorem_content/{section_id}', [LoremIpsumController::class, 'getContentForPath']);

Route::post('/contact_form', function(Request $request, FormContentController $controller) {
  try {
    $body = $request->input();
  
    $controller->createContactPost($body);
  } catch (Exception $e) {
    return response()->json([
      'message' => $e->getMessage(),
    ]);
  }
});