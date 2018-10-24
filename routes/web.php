<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // $name = 'alaa askar';
   // $age = 22;
   // return view('welcome',['name' => 'alaa' , 'age' => 22]);
   // return view('welcome') ->with ('name','alaa') ->with ('age' , 22);
     // return view ('welcome' , compact('name','age'));
  
     $data =[
         'task 1',
         'task 2',
         'task 3'
     ];   
     return view ('welcome' , compact('data'));

});
Route::get('/about',function(){
    return view('about');
});
Route::get('/about/hello',function(){
    return view('about/hello');
});
