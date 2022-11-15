<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\indexcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|  D:\Laravel 8\test     php artisan serve
|  php artisan make:controller nameContrtol
|  
|  
| php artisan make:migration create_nameMirg
| php artisan migrate 
| 
| 
| 
|  
|--------------------------------------------------------------------------
|  
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/services', Function(){
    return view('services');
});
//التعامل مع البراميتر
Route::get('/articless/{id}',Function( 
    Request $request, $id){
    return 'Articles id :'.$id;
});

// Route::get('/article/{id}',Function( 
//     Request $request, $id){
//     return view('articles');
// });
Route::get('/articles',Function(){
    return view('articles');
});
Route::get('/article/{id}',Function( 
    Request $request, $id){
        return 'Articles ids :'.$id;
});

Route::get('/signup',Function(){
    return view('signup');
});
///name route
Route::get('/edit',Function(){
    return'inserted';
})->name('insert');
///
Route::get('/edit',Function(){
    return'delete';
})->name('delete');
///
Route::group(['prefix' => 'en' , 'name'=>'managment'],Function(){
    Route::get('/sign',Function(){
        return 'sign form';
    });
    Route::get('/login',Function(){
        return 'login form';
    });
   // http://127.0.0.1:8000/en/sign

});

//Controllers
// Route::get('/',[indexcontroller::class,'index']);
// Route::get('/{id}',[indexcontroller::class,'index']);

//vewis
//Route::get('/',[indexcontroller::class,'heloo']);

//vewis pramoter
Route::get('/Articledd',[ArticleController::class,'index_news']);
//الراوتر الذي رح نمرر ليه البرامتير 
Route::get('/Articleur/{id}',[ArticleController::class,'display']);
//get data pes seclctr
Route::get('/',[indexcontroller::class,'selectData']);
Route::post('Insert',[indexcontroller::class,'Insert_Data_ADD'])->name('Insert_Data');
Route::post('delete/{id}',[indexcontroller::class,'delete_Data'])->name('delete_Data');
Route::get("update/{id}",[indexcontroller::class,"update_page"]);
Route::post("update/{id}",[indexcontroller::class,"update"])->name('update');