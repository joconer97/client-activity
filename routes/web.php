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
    return view('welcome');
});

// Route::get('/sample', function () {
//     return view('sample');
// });



Route::get('/person',function(){
    $person = factory(App\Person::class)->times(5)->create();
});

Route::get('/person/validate/{username}/{password}',function($username,$password){
    
    $person = App\Person::where('username',$username)->where('password',$password)->count();

    if($person == 1){
        echo "Successfully Entered";
    }else{
        echo "Unsucessfully Enter";
    }
});

Route::get('/person/add/{username}/{password}',function($username,$password){
    
    $person = App\Person::create(['username' => $username,'password' => $password]);

    return $person;
});

Route::get('/person/update/{id}/{username}/{password}',function($id,$username,$password){
    
    $person = App\Person::find($id);
    $person->username = $username;
    $person->password = $password;
    $person->save();

    return $person;
});


// Route::get('/artist',function(){

//     $artists = App\Artist::all();

//     return view('artist',compact('artists'));
// });

// Route::get('/artist/add',function(){

//     $artists = App\Artist::create(['name' => 'Pron','description' => 'POGI']);

// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

