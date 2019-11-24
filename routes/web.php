<?php




//frontpages

    Route::get('/home', 'Frontend\FrontendController@showHome')->name('main');
    Route::get('/login', 'Frontend\FrontendController@showLogin')->name('login');
    Route::get('/registration', 'Frontend\FrontendController@showRegistration')->name('registration');
    Route::post('/login', 'Frontend\AuthController@processLogin')->name('login');
    Route::post('/registration', 'Frontend\AuthController@processRegistration')->name('registration');
    Route::get('/logout', 'frontend\AuthController@logout')->name('logout');

    //aboutuspage..........................................


    //contactuspage.............................................





   //productpage....................................................
    Route::get('/product', 'Product\ProductController@index')->name('product');
    Route::post('/product/create', 'ProductController@create')->name('product_create');

    //orderpage.......................................................

    Route::get('/order', 'Order\OrderController@index')->name('order');
    Route::post('/order/create', 'OrderController@create')->name('order_create');

    //areapage.........................................................
    Route::get('/area', 'Area\AreaController@index')->name('area');
    Route::post('/area/create', 'AreaController@create')->name('area_create');

    //distributor page.................................................
    Route::get('/distributor', 'Distributor\DistributorController@index')->name('distributor');
    Route::post('/distributor/create', 'DistributorController@create')->name('distributor_create');

    //supplier page........................................................
    Route::get('/supplier', 'Supplier\SupplierController@index')->name('supplier');
    Route::post('/supplier/create', 'SupplierController@create')->name('supplier_create');

    //merchandiser page......................................................
    Route::get('/merchandiser', 'Merchandiser\MerchandiserController@index')->name('merchandiser');
    Route::post('/merchandiser/create', 'MerchandiserController@create')->name('merchandiser_create');

    //requisition page...........................................................
    Route::get('/requisition', 'RequisitionController@index')->name('requisition');
    Route::post('/requisition/create', 'RequisitionController@create')->name('requisition_create');

    //taskpage ..............................................................
    Route::get('/task', 'Task\TaskController@index')->name('task');
    Route::post('/task/create', 'TaskController@create')->name('task_create');

    //dashboard layout





    //backend.....................................................................................

    //show dashboard..............................................................................
    Route::get('/panel', 'Backend\DashboardController@showDashboard')->name('panel');

    //contact..............................................................................



    //supplier...............................................................................

    Route::get('/show/supplier',    'Backend\SupplierController@index')->name('show.supplier');
    Route::get('/details/supplier/{id}', 'Backend\SupplierController@details')->name('details.supplier');
    Route::get('/create/supplier',  'Backend\SupplierController@create')->name('create.supplier');
    Route::post('/store/supplier',  'Backend\SupplierController@store')->name('store.supplier');
    Route::get('/edit/supplier',    'Backend\SupplierController@edit')->name('edit.supplier');
    Route::get('/update/supplier',  'Backend\SupplierController@update')->name('update.supplier');
    Route::get('/delete/supplier/{id}', 'Backend\SupplierController@delete')->name('delete.supplier');



    //product...........................................

    Route::get('/show/product/', 'Backend\ProductController@index')->name('show.product');
    Route::get('/details/product/{id}', 'Backend\ProductController@details')->name('details.product');
    Route::get('/create/product', 'Backend\ProductController@create')->name('create.product');
    Route::post('/store/product', 'Backend\ProductController@store')->name('store.product');
    Route::get('/edit/product/{id}','Backend\ProductController@edit')->name('edit.product');
    Route::post('/update/product/{id}', 'Backend\ProductController@update')->name('update.product');
    Route::get('/delete/product/{id}','Backend\ProductController@delete')->name('delete.product');


//order............................................................................

Route::get('/show/order', 'Backend\OrderController@index')->name('show.order');
Route::get('/details/order/{id}', 'Backend\OrderController@details')->name('details.order');
Route::get('/create/order', 'Backend\OrderController@create')->name('create.order');
Route::post('/store/order', 'Backend\OrderController@store')->name('store.order');
Route::GET('/edit/order/{id}','Backend\OrderController@edit')->name('edit.order');
Route::post('/update/order/{id}', 'Backend\OrderController@update')->name('update.order');
Route::GET('/delete/order/{id}','Backend\OrderController@delete')->name('delete.order');


//task............................................................................

Route::get('/show/task', 'Backend\TaskController@index')->name('show.task');
Route::get('/details/task/{id}', 'Backend\TaskController@details')->name('details.task');
Route::get('/create/task', 'Backend\TaskController@create')->name('create.task');
Route::post('/store/task', 'Backend\TaskController@store')->name('store.task');
Route::GET('/edit/task/{id}','Backend\TaskController@edit')->name('edit.task');
Route::post('/update/task/{id}', 'Backend\TaskController@update')->name('update.task');
Route::GET('/delete/task/{id}','Backend\TaskController@delete')->name('delete.task');


//area.................................................................................

Route::get('/show/area', 'Backend\AreaController@index')->name('show.area');
Route::get('/details/task/{id}', 'Backend\AreaController@details')->name('details.area');
Route::get('/create/area', 'Backend\AreaController@create')->name('create.area');
Route::post('/store/area', 'Backend\AreaController@store')->name('store.area');
Route::GET('/edit/area/{id}','Backend\AreaController@edit')->name('edit.area');
Route::PATCH('/update/area/{id}', 'Backend\AreaController@update')->name('update.area');
Route::GET('/delete/area/{id}','Backend\AreaController@delete')->name('delete.area');


//distributor...................................................................................

Route::get('/show/distributor', 'Backend\DistributorController@index')->name('show.distributor');
Route::get('/details/distributor/{id}', 'Backend\DistributorController@details')->name('details.distributor');
Route::get('/create/distributor', 'Backend\DistributorController@create')->name('create.distributor');
Route::post('/store/distributor', 'Backend\DistributorController@store')->name('store.distributor');
Route::GET('/edit/distributor/{id}','Backend\DistributorController@edit')->name('edit.distributor');
Route::post('/update/distributor/{id}', 'Backend\DistributorController@update')->name('update.distributor');
Route::GET('/delete/distributor/{id}','Backend\DistributorController@delete')->name('delete.distributor');


//merchandiser ...............................................................
Route::get('/show/merchandiser', 'Backend\MerchandiserController@index')->name('show.merchandiser');
Route::get('/details/merchandiser/{id}', 'Backend\MerchandiserController@details')->name('details.merchandiser');
Route::get('/create/merchandiser', 'Backend\MerchandiserController@create')->name('create.merchandiser');
Route::post('/store/merchandiser', 'Backend\MerchandiserController@store')->name('store.merchandiser');
Route::GET('/edit/merchandiser/{id}','Backend\MerchandiserController@edit')->name('edit.merchandiser');
Route::post('/update/merchandiser/{id}', 'Backend\MerchandiserController@update')->name('update.merchandiser');
Route::GET('/delete/merchandiser/{id}','Backend\MerchandiserController@delete')->name('delete.merchandiser');



//requisition .....................................................................

    Route::get('show/requisition/', 'Backend\RequisitionController@index')->name('show.requisition');

//backend...............................



//Roles..............................................................................................

Route::get('/user/roles/index', 'Backend\RoleController@index')->name('role_index');
Route::get('/user/roles/create', 'Backend\RoleController@RoleCreate')->name('role_create_page');
Route::post('/user/roles/create', 'Backend\RoleController@create')->name('role_create');
Route::get('/user/roles/{id}/update', 'Backend\RoleController@RoleUpdate')->name('role_update_page');
Route::PATCH('/user/roles/update/{id}', 'Backend\RoleController@update')->name('role_update');
Route::get('/user/roles/delete/{id}', 'Backend\RoleController@delete')->name('role_delete');

//roles end........................................................................................




//Users.......................................................................................

    Route::get('show/user/', 'Backend\UserController@index')->name('show.user');
    Route::get('/details/user/{id}', 'Backend\UserController@details')->name('details.user');
    Route::post('/store/user', 'Backend\UserController@store')->name('store.user');
    Route::post('/update/user/{id}', 'Backend\UserController@update')->name('update.user');
    Route::get('/delete/user/{id}','Backend\UserController@delete')->name('delete.user');

//users end......................................................................................
