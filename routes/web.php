<?php



Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

/*
Route::get('/', function () {
    return view('home');
});*/

/*
Route::get('/usuarios','UsersController@index')->name('usuarios.index');
Route::get('/usuarios/create','UsersController@create')->name('usuarios.create');
Route::post('/usuarios','UsersController@store')->name('usuarios.store');
Route::get('/usuarios/{id}','UsersController@show')->name('usuarios.show');
Route::get('/usuarios/{id}/edit','UsersController@edit')->name('usuarios.edit');
Route::put('/usuarios/{id}','UsersController@update')->name('usuarios.update');
Route::delete('/usuarios/{id}','UsersController@destroy')->name('usuarios.destroy');
*/

/*Generar todas las rutas de un jalon*/
/*
Route::resource('usuarios','UsersController');
Route::resource('posts','PostsController');
*/

Route::get('/contacto', 'ContactController@showform');

Route::post('/contacto', 'ContactController@store')->name('contacto.store');


/*
Route::get('/home', function(){
    return "si ves esta página es por que eres mayor de edad";
})->middleware('edad');
//http://localhost:8000/home?age=19
*/

Route::get('/login', function(){
    return "Formulario para inicias sesión";
})->name('auth.login');


Route::resource('/users', 'UsersController');