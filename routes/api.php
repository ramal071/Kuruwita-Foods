<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//1 postmen eken data passs krnawa
Route::get('users/{name?}', function ($name=null) {
    return 'Hello ' . $name; //URL eke $name=0 unata error ekk enne na.naththam error enwa
}); //->where('name','[a-zA-Z]+');  // namata numbers dammoth error ekk enwa where ek nisa

Route::get('/products/{id?}',function($id=null){ //http://127.0.0.1:8000/api/products/13
    return "product id is " . $id; //product id is 13 in postman
});
//})->where('id','[0-9]+'); //number vitharai dnna puluwn. akuru dmmoth err enw

Route::match(['get','post'], '/students',function(Request $req){
    return'Requested method is ' . $req->method();
});

Route::any('/posts',function(Request $req){  //  Supported methods: GET, HEAD, POST. in file    
    return'Requested method is ' . $req->method();
});