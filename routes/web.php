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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('transfers/export', 'TransferController@export')->name('transfers.export')
->middleware('permission:file.export');
Route::get('returneds/export', 'ReturnedController@export')->name('returneds.export')
->middleware('permission:file.export');
Route::get('folders/export', 'FolderController@export')->name('folders.export')
->middleware('permission:file.export');
Route::get('starts/export', 'StartController@export')->name('starts.export')
->middleware('permission:file.export');

Route::post('transfers/import', 'TransferController@import')->name('transfers.import')
->middleware('permission:file.export');
Route::post('returneds/import', 'ReturnedController@import')->name('returneds.import')
->middleware('permission:file.export');
Route::post('folders/import', 'FolderController@import')->name('folders.import')
->middleware('permission:file.export');
Route::post('starts/import', 'StartController@import')->name('starts.import')
->middleware('permission:file.export');

Route::middleware(['auth'])->group(function () {

	// Permission
	Route::get('permissions', 'PermissionController@index')->name('permissions.index')
        ->middleware('permission:permissions.index');
    Route::post('permissions/store', 'PermissionController@store')->name('permissions.store')
        ->middleware('permission:permissions.store');
    Route::put('permissions/{permission}', 'PermissionController@update')->name('permissions.update')
        ->middleware('permission:permissions.update');
    Route::delete('permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy')
        ->middleware('permission:permissions.destroy');

	// Role
	Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.store');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.update');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    // Agency
    Route::get('agencies', 'AgencyController@index')->name('agencies.index')
        ->middleware('permission:agencies.index');
    Route::post('agencies/store', 'AgencyController@store')->name('agencies.store')
        ->middleware('permission:agencies.store');
    Route::put('agencies/{agency}', 'AgencyController@update')->name('agencies.update')
        ->middleware('permission:agencies.update');
    Route::delete('agencies/{agency}', 'AgencyController@destroy')->name('agencies.destroy')
        ->middleware('permission:agencies.destroy');

    // City
    Route::get('cities', 'CityController@index')->name('cities.index')
        ->middleware('permission:cities.index');
    Route::post('cities/store', 'CityController@store')->name('cities.store')
        ->middleware('permission:cities.store');
    Route::put('cities/{agency}', 'CityController@update')->name('cities.update')
        ->middleware('permission:cities.update');
    Route::delete('cities/{agency}', 'CityController@destroy')->name('cities.destroy')
        ->middleware('permission:cities.destroy');

    // Warranties
    Route::get('warranties', 'WarrantyController@index')->name('warranties.index')
        ->middleware('permission:warranties.index');
    Route::post('warranties/store', 'WarrantyController@store')->name('warranties.store')
        ->middleware('permission:warranties.store');
    Route::put('warranties/{agency}', 'WarrantyController@update')->name('warranties.update')
        ->middleware('permission:warranties.update');
    Route::delete('warranties/{agency}', 'WarrantyController@destroy')->name('warranties.destroy')
        ->middleware('permission:warranties.destroy');

    // User
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.store');
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    // Subject
    Route::get('subjects', 'SubjectController@index')->name('subjects.index')
        ->middleware('permission:subjects.index');
    Route::post('subjects/store', 'SubjectController@store')->name('subjects.store')
        ->middleware('permission:subjects.store');
    Route::put('subjects/{subject}', 'SubjectController@update')->name('subjects.update')
        ->middleware('permission:subjects.update');
    Route::delete('subjects/{subject}', 'SubjectController@destroy')->name('subjects.destroy')
        ->middleware('permission:subjects.destroy');



    //Transfer
    // Traspaso de documentos en custodia
    Route::get('transfers', 'TransferController@index')->name('transfers.index')
        ->middleware('permission:transfers.index');
    Route::get('transfers/{transfer}', 'TransferController@show')->name('transfers.show')
        ->middleware('permission:transfers.show');
    Route::post('transfers/store', 'TransferController@store')->name('transfers.store')
        ->middleware('permission:transfers.store');
    Route::put('transfers/{transfer}', 'TransferController@update')->name('transfers.update')
        ->middleware('permission:transfers.update');
    Route::delete('transfers/{transfer}', 'TransferController@destroy')->name('transfers.destroy')
        ->middleware('permission:transfers.destroy');


    //Accepted
    Route::get('accepteds', 'AcceptedController@index')->name('accepteds.index')
        ->middleware('permission:accepteds.index');
    Route::get('accepteds/store/{transfer}', 'AcceptedController@store')->name('accepteds.store')
        ->middleware('permission:accepteds.store');
    Route::put('accepteds/{accepted}', 'AcceptedController@update')->name('accepteds.update')
        ->middleware('permission:accepteds.update');
    Route::delete('accepteds/{accepted}', 'AcceptedController@destroy')->name('accepteds.destroy')
        ->middleware('permission:accepteds.destroy');


    //Returned
    //Devolucion de documentos en custodia
    Route::get('returneds', 'ReturnedController@index')->name('returneds.index')
        ->middleware('permission:returneds.index');
    Route::get('returneds/{returned}', 'ReturnedController@show')->name('returneds.show')
        ->middleware('permission:returneds.show');
    Route::post('returneds/store', 'ReturnedController@store')->name('returneds.store')
        ->middleware('permission:returneds.store');
    Route::put('returneds/{returned}', 'ReturnedController@update')->name('returneds.update')
        ->middleware('permission:returneds.update');
    Route::delete('returneds/{returned}', 'ReturnedController@destroy')->name('returneds.destroy')
        ->middleware('permission:returneds.destroy');

    Route::get('returneds/print/{returned}', 'ReturnedController@print')->name('returneds.print')
    ->middleware('permission:returneds.show');

    // Folder
    //traspaso de carpetas y clientes a ara legal
    Route::get('folders', 'FolderController@index')->name('folders.index')
        ->middleware('permission:folders.index');
    Route::get('folders/{folder}', 'FolderController@show')->name('folders.show')
        ->middleware('permission:folders.show');
    Route::post('folders/store', 'FolderController@store')->name('folders.store')
        ->middleware('permission:folders.store');
    Route::put('folders/{folder}', 'FolderController@update')->name('folders.update')
        ->middleware('permission:folders.update');
    Route::delete('folders/{folder}', 'FolderController@destroy')->name('folders.destroy')
        ->middleware('permission:folders.destroy');

    //approved
    Route::get('approveds', 'ApprovedController@index')->name('approveds.index')
        ->middleware('permission:approveds.index');
    Route::get('approveds/store/{folder}', 'ApprovedController@store')->name('approveds.store')
        ->middleware('permission:approveds.store');
    Route::put('approveds/{approved}', 'ApprovedController@update')->name('approveds.update')
        ->middleware('permission:approveds.update');
    Route::delete('approveds/{approved}', 'ApprovedController@destroy')->name('approveds.destroy')
        ->middleware('permission:approveds.destroy');

    // Motion
    Route::get('motions', 'MotionController@index')->name('motions.index')
        ->middleware('permission:motions.index');
    Route::post('motions/store', 'MotionController@store')->name('motions.store')
        ->middleware('permission:motions.store');
    Route::put('motions/{motion}', 'MotionController@update')->name('motions.update')
        ->middleware('permission:motions.update');
    Route::delete('motions/{motion}', 'MotionController@destroy')->name('motions.destroy')
        ->middleware('permission:motions.destroy');

    // Star
    //inicio de acciones legales
    Route::get('starts', 'StartController@index')->name('starts.index')
        ->middleware('permission:starts.index');
    Route::get('starts/{start}', 'StartController@show')->name('starts.show')
        ->middleware('permission:starts.show');
    Route::post('starts/store', 'StartController@store')->name('starts.store')
        ->middleware('permission:starts.store');
    Route::put('starts/{start}', 'StartController@update')->name('starts.update')
        ->middleware('permission:starts.update');
    Route::delete('starts/{start}', 'StartController@destroy')->name('starts.destroy')
        ->middleware('permission:starts.destroy');

    // admitted
    Route::get('admitteds', 'AdmittedController@index')->name('admitteds.index')
        ->middleware('permission:admitteds.index');
    Route::get('admitteds/store/{start}', 'AdmittedController@store')->name('admitteds.store')
        ->middleware('permission:admitteds.store');
    Route::put('admitteds/{admitted}', 'AdmittedController@update')->name('admitteds.update')
        ->middleware('permission:admitteds.update');
    Route::delete('admitteds/{admitted}', 'AdmittedController@destroy')->name('admitteds.destroy')
        ->middleware('permission:admitteds.destroy');

    // observed
    Route::get('observeds', 'ObservedController@index')->name('observeds.index')
        ->middleware('permission:observeds.index');
    Route::post('observeds/store', 'ObservedController@store')->name('observeds.store')
        ->middleware('permission:observeds.store');
    Route::put('observeds/{observed}', 'ObservedController@update')->name('observeds.update')
        ->middleware('permission:observeds.update');
    Route::delete('observeds/{observed}', 'ObservedController@destroy')->name('observeds.destroy')
        ->middleware('permission:observeds.destroy');

    // rejected
    Route::get('rejecteds', 'RejectedController@index')->name('rejecteds.index')
        ->middleware('permission:rejecteds.index');
    Route::post('rejecteds/store', 'RejectedController@store')->name('rejecteds.store')
        ->middleware('permission:rejecteds.store');
    Route::put('rejecteds/{rejected}', 'RejectedController@update')->name('rejecteds.update')
        ->middleware('permission:rejecteds.update');
    Route::delete('rejecteds/{rejected}', 'RejectedController@destroy')->name('rejecteds.destroy')
        ->middleware('permission:rejecteds.destroy');

    //Gastos judiciales
    // Expenses
    Route::get('expenses', 'ExpenseController@index')->name('expenses.index')
        ->middleware('permission:expenses.index');
    Route::post('expenses/store', 'ExpenseController@store')->name('expenses.store')
        ->middleware('permission:expenses.store');
    Route::put('expenses/{expense}', 'ExpenseController@update')->name('expenses.update')
        ->middleware('permission:expenses.update');
    Route::delete('expenses/{expense}', 'ExpenseController@destroy')->name('expenses.destroy')
        ->middleware('permission:expenses.destroy');

    Route::get('expenses/print/{expense}', 'ExpenseController@print')->name('expenses.print')
    ->middleware('permission:expenses.show');

    //Acciones legales

    // income
    Route::get('incomes', 'IncomeController@index')->name('incomes.index')
        ->middleware('permission:incomes.index');
    Route::post('incomes/store', 'IncomeController@store')->name('incomes.store')
        ->middleware('permission:incomes.store');
    Route::put('incomes/{income}', 'IncomeController@update')->name('incomes.update')
        ->middleware('permission:incomes.update');
    Route::delete('incomes/{income}', 'IncomeController@destroy')->name('incomes.destroy')
        ->middleware('permission:incomes.destroy');


    // step
    Route::get('steps', 'StepController@index')->name('steps.index')
        ->middleware('permission:steps.index');
    Route::post('steps/store', 'StepController@store')->name('steps.store')
        ->middleware('permission:steps.store');
    Route::put('steps/{step}', 'StepController@update')->name('steps.update')
        ->middleware('permission:steps.update');
    Route::delete('steps/{step}', 'StepController@destroy')->name('steps.destroy')
        ->middleware('permission:steps.destroy');

    // Movement
    Route::get('movements', 'MovementController@index')->name('movements.index')
        ->middleware('permission:movements.index');
    Route::post('movements/store', 'MovementController@store')->name('movements.store')
        ->middleware('permission:movements.store');
    Route::put('movements/{movement}', 'MovementController@update')->name('movements.update')
        ->middleware('permission:movements.update');
    Route::delete('movements/{movement}', 'MovementController@destroy')->name('movements.destroy')
        ->middleware('permission:movements.destroy');

    Route::get('movements/toDo', 'MovementController@todo')->name('movements.todo')
        ->middleware('permission:movements.store');

    //full
    Route::get('fulls', 'FullController@index')->name('fulls.index')
        ->middleware('permission:fulls.index');
    Route::get('fulls/store/{moviment}', 'FullController@store')->name('fulls.store')
        ->middleware('permission:fulls.store');
    Route::put('fulls/{full}', 'FullController@update')->name('fulls.update')
        ->middleware('permission:fulls.update');
    Route::delete('fulls/{full}', 'FullController@destroy')->name('fulls.destroy')
        ->middleware('permission:fulls.destroy');

    //contrato uno
    Route::get('acontracts', 'AContractController@index')->name('acontracts.index')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/1-0', 'AContractController@unocero')->name('acontracts.unocero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/1-1', 'AContractController@unouno')->name('acontracts.unouno')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/2-0', 'AContractController@doscero')->name('acontracts.doscero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/2-1', 'AContractController@dosuno')->name('acontracts.dosuno')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/3-0', 'AContractController@trescero')->name('acontracts.trescero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/3-1', 'AContractController@tresuno')->name('acontracts.tresuno')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/4-0', 'AContractController@cuatrocero')->name('acontracts.cuatrocero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/4-1', 'AContractController@cuatrouno')->name('acontracts.cuatrouno')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/5-0', 'AContractController@cincocero')->name('acontracts.cincocero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/5-1', 'AContractController@cincouno')->name('acontracts.cincouno')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/5-2', 'AContractController@cincodos')->name('acontracts.cincodos')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/6-0', 'AContractController@seiscero')->name('acontracts.seiscero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/6-1', 'AContractController@seisuno')->name('acontracts.seisuno')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/6-2', 'AContractController@seisdos')->name('acontracts.seisdos')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/7-0', 'AContractController@sietecero')->name('acontracts.sietecero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/7-1', 'AContractController@sieteuno')->name('acontracts.sieteuno')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/7-2', 'AContractController@sietedos')->name('acontracts.sietedos')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/8-0', 'AContractController@ochocero')->name('acontracts.ochocero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/8-1', 'AContractController@ochouno')->name('acontracts.ochouno')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/8-2', 'AContractController@ochodos')->name('acontracts.ochodos')
        ->middleware('permission:acontracts.index');

    Route::post('acontracts/9-0', 'AContractController@nuevecero')->name('acontracts.nuevecero')
        ->middleware('permission:acontracts.index');
    Route::post('acontracts/9-1', 'AContractController@nueveuno')->name('acontracts.nueveuno')
        ->middleware('permission:acontracts.index');

    //contrato dos
    Route::get('bcontracts', 'BContractController@index')->name('bcontracts.index')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/1-0', 'BContractController@unocero')->name('bcontracts.unocero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/1-1', 'BContractController@unouno')->name('bcontracts.unouno')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/2-0', 'BContractController@doscero')->name('bcontracts.doscero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/2-1', 'BContractController@dosuno')->name('bcontracts.dosuno')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/3-0', 'BContractController@trescero')->name('bcontracts.trescero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/3-1', 'BContractController@tresuno')->name('bcontracts.tresuno')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/4-0', 'BContractController@cuatrocero')->name('bcontracts.cuatrocero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/4-1', 'BContractController@cuatrouno')->name('bcontracts.cuatrouno')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/5-0', 'BContractController@cincocero')->name('bcontracts.cincocero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/5-1', 'BContractController@cincouno')->name('bcontracts.cincouno')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/5-2', 'BContractController@cincodos')->name('bcontracts.cincodos')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/6-0', 'BContractController@seiscero')->name('bcontracts.seiscero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/6-1', 'BContractController@seisuno')->name('bcontracts.seisuno')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/6-2', 'BContractController@seisdos')->name('bcontracts.seisdos')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/7-0', 'BContractController@sietecero')->name('bcontracts.sietecero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/7-1', 'BContractController@sieteuno')->name('bcontracts.sieteuno')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/7-2', 'BContractController@sietedos')->name('bcontracts.sietedos')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/8-0', 'BContractController@ochocero')->name('bcontracts.ochocero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/8-1', 'BContractController@ochouno')->name('bcontracts.ochouno')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/8-2', 'BContractController@ochodos')->name('bcontracts.ochodos')
        ->middleware('permission:bcontracts.index');

    Route::post('bcontracts/9-0', 'BContractController@nuevecero')->name('bcontracts.nuevecero')
        ->middleware('permission:bcontracts.index');
    Route::post('bcontracts/9-1', 'BContractController@nueveuno')->name('bcontracts.nueveuno')
        ->middleware('permission:bcontracts.index');

});
