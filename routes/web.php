<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//CSRF Protection (Cross Site Request Forgery)
 
    // Route::get($uri, $callback);

    // Route::post($uri, $callback);

    // Route::put($uri, $callback);

    // Route::patch($uri, $callback);

    // Route::delete($uri, $callback);

    // Route::options($uri, $callback);
 

//Perdoret per te gjitha vlerat

Route::match(['get', 'post'], '/login', function () {  
    return view('login');
});  

// Route::any('/', function ()   
// {  
// // 
// }); 



Route::get('/', function()
{
return "This is a home page";

}
);//Home page

Route::get('/about', function()
{
return "This is an about  page";

}
);//About page


Route::get('/contact', function()
{
return "This is a contact page";

}
);//Contact page


//Example with route parameters
//Id page
Route::get('/post/{id}', function($id)
{
return "id is :$id";
}
);



//OPtional parameters
//User page

Route::get('/user/{name?}', function($name=null)
{
return $name;
}
);

//User page default
Route::get('/admin/{name?}', function($name='Arianit')
{
return $name;

}
);

//Name page
Route::get('/admin/{name?}', function($name='Arianit')
{
return $name;
}
)->where('name','[a-zA-ZëË]+');


//User id

Route::get('/user1/{id?}', function($id=null)
{
return "id is:$id";
}
)->where('id','[0-9]+');

//Detyra e pare
Route::get('/users2/{name?}/{id?}', function($name=null,$id=null)
{
return "name is:$name, and id is:$id";
}
)->where('name','[a-zA-ZëË]+','id','[0-9]+');















