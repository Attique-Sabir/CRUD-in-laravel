<?php

use Illuminate\Support\Facades\Route;
use App\Expense;
use App\Selary;
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
    return view('welcome');
});

Auth::routes();
Route::get('/home',function()
{
    $expenses=Expense::paginate(3);


    $salary=Selary::paginate(3);
    return view ('home',compact('expenses','salary'));
    
});

Route::post('/selary', 'SelaryController@store');
Route::get('/addsalary', 'SelaryController@index')->name('AddSalary');

Route::post('/addselary', 'SelaryController@store')->name('add_selary');
// Route::get('/selary/{selary}/show', 'SelaryController@show');
Route::get('/selary/{selary}', 'SelaryController@edit')->name('edit');
Route::delete('/selary/{selary}', 'SelaryController@destroy')->name('delete');
Route::put('/selary/{selary}', 'SelaryController@update')->name('update');

// Route::delete('/selary/{selary}', 'SelaryController@destroy');
// Route::get('addFee',function(){
//     return view('student_fee');
// });

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home',function()
// {
//     $expenses=Expense::paginate(3);

//     // dd($expenses);
//     $salary=Selary::paginate(3);
//     return view ('home',compact('expenses','salary'));
    
// });
// Route::resource('expense', 'ExpenseController');
// Route::get('/addexpenses', function()
// {
//     return view('add_expenses');
// });
// Route::get('/yourexpense', function()
// {
//     $expenses=Expense::all();
//     return view('yourexpense',compact('expenses'));
// });
// Route::resource('selary','SelaryController');
// // Route::get('/addselary', function()
// // {
// //     return view('add_selary');
// // });
// Route::get('salaraydata',function()
// {
//     $salary=Selary::all();
//     return view('staff_salary',compact('salary'));
// });