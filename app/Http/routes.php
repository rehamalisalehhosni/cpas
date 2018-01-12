<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
*/
Route::get('/', function () {
	return view('welcome');
});


Route::auth();
Route::group(['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index');
	Route::resource('users','admin\UserController');
	//Route::resource('roles','admin\RoleController');
	//Route::resource('news','admin\NewsController');
	Route::resource('itemCRUD2','admin\ItemCRUD2Controller');
	//Route::resource('uploadImage','admin\uploadImageController');
	Route::post('uploadImage/store', ['as' => 'uploadImage.store', 'uses' => 'admin\UploadImageController@store', 'middleware' => []]);
	//Route::resource('news','admin\NewsController');
	//////////////roles///////////////////
	Route::get('roles', ['as' => 'roles.index', 'uses' => 'admin\RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create', ['as' => 'roles.create', 'uses' => 'admin\RoleController@create', 'middleware' => ['permission:role-create']]);
	Route::post('roles/create', ['as' => 'roles.store', 'uses' => 'admin\RoleController@store', 'middleware' => ['permission:role-create']]);
	Route::get('roles/{id}', ['as' => 'roles.show', 'uses' => 'admin\RoleController@show']);
	Route::get('roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'admin\RoleController@edit', 'middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}', ['as' => 'roles.update', 'uses' => 'admin\RoleController@update', 'middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}', ['as' => 'roles.destroy', 'uses' => 'admin\RoleController@destroy', 'middleware' => ['permission:role-delete']]);
	/////////News ///////////
	Route::get('news', ['as' => 'news.index', 'uses' => 'admin\NewsController@index', 'middleware' => ['permission:news-list|news-create|news-edit|news-delete']]);
	Route::get('news/create', ['as' => 'news.create', 'uses' => 'admin\NewsController@create', 'middleware' => ['permission:news-create']]);
	Route::post('news/create', ['as' => 'news.store', 'uses' => 'admin\NewsController@store', 'middleware' => ['permission:news-create']]);
	Route::get('news/{id}', ['as' => 'news.show', 'uses' => 'admin\NewsController@show']);
	Route::get('news/{id}/edit', ['as' => 'news.edit', 'uses' => 'admin\NewsController@edit', 'middleware' => ['permission:news-edit']]);
	Route::patch('news/{id}', ['as' => 'news.update', 'uses' => 'admin\NewsController@update', 'middleware' => ['permission:news-edit']]);
	Route::delete('news/{id}', ['as' => 'news.destroy', 'uses' => 'admin\NewsController@destroy', 'middleware' => ['permission:news-delete']]);
	Route::post('news/deleteNewsImages', ['as' => 'news.deleteNewsImages', 'uses' => 'admin\NewsController@deleteNewsImages', 'middleware' => ['permission:news-edit']]);
	/////////project Category ///////////
	Route::get('projectCategory', ['as' => 'projectCategory.index', 'uses' => 'admin\ProjectsCategoryController@index', 'middleware' => ['permission:projectCategory-list|projectCategory-create|projectCategory-edit|projectCategory-delete']]);
	Route::get('projectCategory/create', ['as' => 'projectCategory.create', 'uses' => 'admin\ProjectsCategoryController@create', 'middleware' => ['permission:projectCategory-create']]);
	Route::post('projectCategory/create', ['as' => 'projectCategory.store', 'uses' => 'admin\ProjectsCategoryController@store', 'middleware' => ['permission:projectCategory-create']]);
	Route::get('projectCategory/{id}', ['as' => 'projectCategory.show', 'uses' => 'admin\ProjectsCategoryController@show']);
	Route::get('projectCategory/{id}/edit', ['as' => 'projectCategory.edit', 'uses' => 'admin\ProjectsCategoryController@edit', 'middleware' => ['permission:projectCategory-edit']]);
	Route::patch('projectCategory/{id}', ['as' => 'projectCategory.update', 'uses' => 'admin\ProjectsCategoryController@update', 'middleware' => ['permission:projectCategory-edit']]);
	Route::delete('projectCategory/{id}', ['as' => 'projectCategory.destroy', 'uses' => 'admin\ProjectsCategoryController@destroy', 'middleware' => ['permission:projectCategory-delete']]);

	/////////projects ///////////
	Route::get('projects', ['as' => 'projects.index', 'uses' => 'admin\ProjectsController@index', 'middleware' => ['permission:projects-list|projects-create|projects-edit|projects-delete']]);
	Route::get('projects/create', ['as' => 'projects.create', 'uses' => 'admin\ProjectsController@create', 'middleware' => ['permission:projects-create']]);
	Route::post('projects/create', ['as' => 'projects.store', 'uses' => 'admin\ProjectsController@store', 'middleware' => ['permission:projects-create']]);
	Route::get('projects/{id}', ['as' => 'projects.show', 'uses' => 'admin\ProjectsController@show']);
	Route::get('projects/{id}/edit', ['as' => 'projects.edit', 'uses' => 'admin\ProjectsController@edit', 'middleware' => ['permission:projects-edit']]);
	Route::patch('projects/{id}', ['as' => 'projects.update', 'uses' => 'admin\ProjectsController@update', 'middleware' => ['permission:projects-edit']]);
	Route::delete('projects/{id}', ['as' => 'projects.destroy', 'uses' => 'admin\ProjectsController@destroy', 'middleware' => ['permission:projects-delete']]);
	Route::post('projects/deleteProjectsImages', ['as' => 'projects.deleteProjectsImages', 'uses' => 'admin\ProjectsController@deleteProjectsImages', 'middleware' => ['permission:projects-edit']]);

	/*
	Route::get('roles',['as'=>'roles.index','uses'=>'admin\RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'admin\RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'admin\RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'admin\RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'admin\RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'admin\RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'admin\RoleController@destroy','middleware' => ['permission:role-delete']]);
	*/
	/*
	Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
	*/
});
