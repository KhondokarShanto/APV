<?php




//frontpages

    Route::get('/home', 'Frontend\FrontendController@showHome')->name('main');

    Route::get('/login', 'Frontend\FrontendController@showLogin')->name('login');

    Route::get('/registration', 'Frontend\FrontendController@showRegistration')->name('registration');

    Route::post('/login', 'Frontend\AuthController@processLogin')->name('login');

    Route::post('/registration', 'Frontend\AuthController@processRegistration')->name('registration');

    Route::get('/logout', 'frontend\AuthController@logout')->name('logout');





    //aboutuspage..........................................

    Route::get('/about', 'AboutUsController@index')->name('about');

    //contactuspage.............................................
    Route::get('/contact', 'ContactUsController@index')->name('contact');

    Route::post('/contact/create', 'ContactUsController@create')->name('contact_create');




   /* //productpage....................................................
    Route::get('/product', 'Product\ProductController@index')->name('product');

    Route::post('/product/create', 'ProductController@create')->name('product_create');*/





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





    //backend...............................
            // $table->foreign('role_id')->references('id')->on('roles')->onCascade('delete');
    // $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
    //show dashboard............................
    Route::get('/panel', 'Backend\DashboardController@showDashboard')->name('panel');

    //contact...................................
    Route::get('/admin/contact', 'Dashboard\DashboardContactController@index')->name('dashcontact');



    //supplier...............................................

    Route::get('/show/supplier',    'Backend\SupplierController@index')->name('show.supplier');

    Route::get('/details/supplier/{id}', 'Backend\SupplierController@details')->name('details.supplier');

    Route::get('/create/supplier',  'Backend\SupplierController@create')->name('create.supplier');

    Route::post('/store/supplier',  'Backend\SupplierController@store')->name('store.supplier');

    Route::get('/edit/supplier',    'Backend\SupplierController@edit')->name('edit.supplier');

    Route::get('/update/supplier',  'Backend\SupplierController@update')->name('update.supplier');

    Route::get('/delete/supplier/{id}', 'Backend\SupplierController@delete')->name('delete.supplier');



    //product...........................................

    Route::get('show/product/', 'Backend\ProductController@index')->name('show.product');

    Route::get('/details/product/{id}', 'Backend\ProductController@details')->name('details.product');


    Route::get('/create/product', 'Backend\ProductController@create')->name('create.product');

    Route::post('/store/product', 'Backend\ProductController@store')->name('store.product');

    Route::get('/edit/product/{id}','Backend\ProductController@edit')->name('edit.product');

    Route::post('/update/product/{id}', 'Backend\ProductController@update')->name('update.product');

    Route::get('/delete/product/{id}','Backend\ProductController@delete')->name('delete.product');




//order.................................................

Route::get('/show/order', 'Order\OrderController@showOrder')->name('dashorder');

Route::get('/create/order', 'Order\OrderController@createOrder')->name('createOrder');

Route::post('/store/order', 'Order\OrderController@create')->name('storeOrder');

Route::GET('order/{id}/','Order\OrderController@edit')->name('orderEdit');

Route::Any('order/update/{id}', 'Order\OrderController@update')->name('orderUpdate');

Route::GET('order/delete/{id}','Order\OrderController@delete')->name('orderdelete');


//task.................................................................

Route::get('/show/task', 'Task\TaskController@showTask')->name('dashtask');

Route::get('/create/task', 'Task\TaskController@createTask')->name('createTask');

Route::post('/store/task', 'Task\TaskController@create')->name('storeTask');



//area...................................

Route::get('/show/area', 'Area\AreaController@showArea')->name('dasharea');

Route::get('/create/area', 'Area\AreaController@createArea')->name('createArea');

Route::post('/store/area', 'Area\AreaController@create')->name('storeArea');

Route::GET('area/{id}/','Area\AreaController@edit')->name('areaEdit');

Route::Any('area/update/{id}', 'Area\AreaController@update')->name('areaUpdate');

Route::GET('area/delete/{id}','Area\AreaController@delete')->name('areadelete');




//distributor.......................................

Route::get('/show/distributor', 'Distributor\DistributorController@showDistributor')->name('distributor');

Route::get('/create/distributor', 'Distributor\DistributorController@createDistributor')->name('createDistributor');

Route::post('/store/distributor', 'Distributor\DistributorController@create')->name('storeDistributor');








//merchandiser ...............................................................
Route::get('/show/merchandiser', 'Merchandiser\MerchandiserController@showMerchandiser')->name('merchandiser');

Route::get('/create/merchandiser', 'Merchandiser\MerchandiserController@createMerchandiser')->name('createMerchandiser');

Route::post('/store/merchandiser', 'Merchandiser\MerchandiserController@create')->name('storeMerchandiser');




//requisition .....................................................................

    Route::get('show/requisition/', 'Backend\RequisitionController@index')->name('show.requisition');

//backend...............................



//Roles

Route::get('/user/roles/index', 'Backend\RoleController@index')->name('role_index');

Route::get('/user/roles/create', 'Backend\RoleController@RoleCreate')->name('role_create_page');

Route::post('/user/roles/create', 'Backend\RoleController@create')->name('role_create');

Route::get('/user/roles/{id}/update', 'Backend\RoleController@RoleUpdate')->name('role_update_page');

Route::PATCH('/user/roles/update/{id}', 'Backend\RoleController@update')->name('role_update');

Route::get('/user/roles/delete/{id}', 'Backend\RoleController@delete')->name('role_delete');

//roles end




//Users

    Route::get('show/user/', 'Backend\UserController@index')->name('show.user');

    Route::get('/details/user/{id}', 'Backend\UserController@details')->name('details.user');

    Route::post('/store/user', 'Backend\UserController@store')->name('store.user');

    Route::post('/update/user/{id}', 'Backend\UserController@update')->name('update.user');

    Route::get('/delete/user/{id}','Backend\UserController@delete')->name('delete.user');
//users end
