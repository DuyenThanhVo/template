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

Route::get('/', 'PagesController@index');


// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

//Begin::Template
Route::get('/list-template', 'ListTemplateController@listTemplate');

Route::get('/details-template/{code}', 'ListTemplateController@detailsTemplate')->name('template.detailsTemplate');

Route::get('/create-template', 'ListTemplateController@create')->name('template.create');
Route::post('/store-template', 'ListTemplateController@store')->name('template.store');
Route::get('/destroy-template/{id?}', 'ListTemplateController@destroy')->name('template.destroy');
Route::get('/edit-template/{id}', 'ListTemplateController@edit')->name('template.edit');
Route::post('/update-template/{id}', 'ListTemplateController@update')->name('template.update');

//Upload file type image

Route::post('/upload-file/{imagePath?}', 'ListTemplateController@upLoadFile')->name('template.upLoadFile');


Route::get('/page/{code}', 'ListTemplateController@showPage')->name('template.showPage');
//End::Template
Route::get('/listcontact', function () {
    $page_title = 'List Contact';
    $page_description = 'This is list contact page';
    return  view('contacts.HomeContact', [
        "page_title" => $page_title,
        "page_description" => $page_description,
    ]);
});

Route::get('/home', function () {
    return  view('contacts.home');
});


Route::get('/private', function () {
    return  view('contacts.private');
});


Route::get('/testapi', function () {
    return  view('testapi');
});



Route::get('/list-campaign', 'CampaignController@listCampaginsApi')->name('campaign.listCampaginsApi');
Route::get('/list-product', 'CampaignController@listProductsApi')->name('campaign.listProductsApi');

