<?php

use Illuminate\Support\Facades\Route;

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

//Alternative welcome screen
Route::view('/Home', 'welcome');

//Welcome screen
Route::view('/', 'welcome');

//Contact page
Route::view('/contact', 'Contact');

//About page
Route::view('/about', 'about');

//Project page
Route::view('/project', 'project');

//This route will take you to the add valve page
Route::get('/add_valve', 'Controller@add_valve');

Route::view('/create', 'Create');

//Return the valve submitted page after submitting a valve
//Route::view('/Valve_submitted', 'Valve_submitted');

//Following routes will deal with database operations and return a view

//Route for Submit1, when submitting site information to database
//Route Submit1 will return the add_valve
Route::post('/Submit1', 'Controller@Submit1');

//Route for Submit2. Submit2 will place all the valve
//information into the database.
Route::post('/Submit2', 'Controller@Submit2');

//Route for Submit3. Submit3 will show all the 
//sites in the database in a table format.
Route::get('/Submit3', 'Controller@Submit3');

//Route for Submit4. Submit4 will show the site selected.
Route::get('Submit4', 'Controller@Submit4');

//Route for Submit5. Submit5 will update the information in
//the database and then show all the valves again by
//redirecting to the Submit3 controller function.
Route::post('/Submit5', 'Controller@Submit5');

//Route for Submit6. Submit6 will delete the information in
//the database and return the table of results left.
Route::get('/Submit6', 'Controller@Submit6');

//Route Submit7. Submit7 will allow you to view a site.
Route::get('/Submit7', 'Controller@Submit7');

//Route Submit8. Submit8 lets the user create a design basis manual
Route::get('/Submit8', 'Controller@Submit8');

//Get all valves in database
Route::get('/Submit9', 'Controller@Submit9');

//Submit10 to edit a particular valve in the database
Route::get('/Submit10', 'Controller@Submit10');

//Submit11 to delete a particular valve in the database
Route::get('/Submit11', 'Controller@Submit11');

//Submit12 to view a particular valve in the database
Route::get('/Submit12', 'Controller@Submit12');

//Submit 13 will point allow the user to size the valve and
//return a list of acceptable actuators
Route::get('/Submit13', 'Controller@Submit13');

//Submit14 will let you update the entries for a valve in the database
Route::post('/Submit14', 'Controller@Submit14');

//Submit15 will let you create an actuator data sheet for the valve in question
Route::get('/Submit15', 'Controller@Submit15');

Route::get('/Submit20', 'Controller@Submit20');