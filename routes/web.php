<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WerehouseController;
use App\Http\Controllers\MallController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\SupportController;
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


Route::get('/admin', function () {
    return view('auth/login');
});


Route::post('/login/check',[HomeController::class, 'login_check']);
Route::any('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/admin/register', function(){
    return view('auth/register');
})->name('admin.register.form');

Route::post('admin/register', [HomeController::class, 'register'])->name('admin.register');

#mall routes

Route::prefix('capital')->group(function(){

    Route::get('/dashboard', [CapitalController::class, 'dashboard']);
    Route::get('/geneology', [CapitalController::class, 'geneology']);
    Route::get('/new/business/details', [CapitalController::class, 'new_business_details'])->name('new.business.details');
    Route::get('/welcome/letter', [CapitalController::class, 'welcome_letter'])->name('welcome.letter');
    Route::get('/edit/profile/{id}',[MembersController::class, 'edit_profile'])->name('edit.profile');
    Route::post('/update/profile', [MembersController::class, 'update_profile'])->name('update.profile');
    Route::get('/edit/bank/account/{id}',[CapitalController::class, 'edit_bank_account'])->name('edit.bank.account');
    Route::post('update/bank/account', [CapitalController::class, 'update_bank_account'])->name('update.bank.account');
    Route::get('/upload/form', [CapitalController::class, 'upload_form']);
    Route::post('/upload/document', [MembersController::class, 'upload_document'])->name('upload.document');

    Route::get('/change/password/{id}',[CapitalController::class, 'change_password'])->name('change.password');
    Route::post('/change/password/', [CapitalController::class, 'update_password'])->name('change.login.password');

    Route::get('/change/txn/password/{id}',[CapitalController::class, 'change_txn_password'])->name('change.txn.password');
    Route::post('/change/txn/password/', [CapitalController::class, 'update_txn_password'])->name('update.txn.password');

    Route::get('/tree/structure', [CapitalController::class, 'tree_structure'])->name('tree.structure');
    Route::get('/list/join/pins', [CapitalController::class, 'list_join_pins'])->name('list.join.pins');

    Route::get('/down/line', [MembersController::class, 'down_line'])->name('down.line');
    Route::get('/direct/members', [MembersController::class, 'direct_associates'])->name('direct.associates');
    Route::get('/payout/summary', [CapitalController::class, 'payout_summary'])->name('payout.summary');
    Route::get('/send/message', [CapitalController::class, 'send_messages'])->name('send.messages');
    Route::get('/view/messages', [CapitalController::class, 'view_messages'])->name('view.messages');

    Route::get('/seminar/meeting', [CapitalController::class, 'seminar_meeting'])->name('seminar.meeting');

    Route::get('/view/pin', [PinController::class, 'index']);
    Route::any('/display/pin', [PinController::class, 'display_pin'])->name('display');
    Route::get('/view/pin/request', [PinController::class, 'view_pin_request'])->name('view.pin.request');
    Route::get('buy/pin/form', [PinController::class, 'buy_pin_form'])->name('buy.pin.form');
    Route::post('/buy/pin', [PinController::class, 'buy_pin'])->name('buy.pin');
    Route::get('/transfer/pin/page', [PinController::class, 'transfer_pin_page']);
    Route::post('/transfer/pin',[PinController::class, 'transfer_pin'])->name('transfer.pin');
    Route::get('view-used-pins', [PinController::class, 'view_used_pins']);
    Route::get('view-unused-pins',[PinController::class, 'view_unused_pins']);
    Route::get('view-all-pins',[PinController::class, 'view_all_pins']);
    Route::get('view-transfered-pin', [PinController::class, 'view_transfered_pins'])->name('user.transfered.pin');
    Route::get('received-pins', [PinController::class, 'received_pins'])->name('received.pins');
    #tree routes

    Route::get('tree', [TreeController::class,'tree_view'])->name('view.tree');
    #end tree routes

    #for super admin

    Route::get('/view/pin/request', [PinController::class, 'pin_request'])->name('pin.request');
    Route::get('/display/all/pin', [PinController::class, 'display_all_pin'])->name('display.pins');
    Route::get('/main/board/', [HomeController::class, 'home']);

    #course
    Route::get('/add/course', [CourseController::class , 'add_course'])->name('add.course.form');
    Route::post('/save/course',[CourseController::class, 'save_course'])->name('save.course');
    Route::get('/course/edit/{id}',[CourseController::class, 'edit_course'])->name('course.edit');
    Route::post('/course/update',[CourseController::class, 'update_course'])->name('course.update');
    Route::get('/course/delete/{id}',[CourseController::class, 'delete_course'])->name('course.delete');
    Route::get('/course/view/{id}',[CourseController::class, 'view_course'])->name('course.view');
    Route::get('/course/booked', [CourseController::class, 'course_booked'])->name('course.booked');
    Route::get('/left-course-booked', [CourseController::class, 'left_course_booked'])->name('left.course.booked');
    Route::get('/right-course-booked', [CourseController::class, 'right_course_booked'])->name('right.course.booked');
    Route::get('/team-course-booked', [CourseController::class, 'team_course_booked'])->name('team.course.booked');
    #users
    Route::get('/members', [MembersController::class, 'index'])->name('member.list');
    Route::get('/bank/details', [MembersController::class, 'bank_details'])->name('bank.details');
    Route::post('/store-bank-account', [MembersController::class, 'add_account'])->name('add.bank.account');
    Route::post('/store-qrcode', [MembersController::class, 'store_qrcode'])->name('store.qrcode');
});


#ajax routes
Route::any('view/pin', [AjaxController::class, 'view_pin'])->name('view.pin');
Route::any('change/status', [PinController::class ,'change_status'])->name('change.status');
Route::any('get/course', [AjaxController::class, 'get_course_details'])->name('get.course');
Route::any('requested/pin', [AjaxController::class, 'requested_pin'])->name('requested.pin');
Route::any('get-package', [AjaxController::class, 'get_package'])->name('get.package');
Route::any('qrcode', [MembersController::class, 'qrcode'])->name('qr.code');
Route::any('sponser', [AjaxController::class, 'sponser'])->name('sponser');
Route::any('tree/list', [AjaxController::class, 'tree_list'])->name("tree.list");
Route::any('member/list', [AjaxController::class, 'member_list'])->name('member.list');

Route::any('get/member', [AjaxController::class, 'get_member'])->name('get.member');
Route::any('get/sponser', [AjaxController::class , 'get_sponser'])->name('get.sponser');

#front end routes

Route::prefix('frontend')->group(function(){


});

Route::get('/', [FrontEndController::class, 'index'])->name('frontend');
Route::get('/aboutus', [FrontEndController::class, 'about_us']);
Route::get('/register', [FrontEndController::class, 'register_form'])->name('user.register.form');
Route::get('/login',[FrontEndController::class, 'login'])->name('user.login.form');
Route::post('login/user',[FrontEndController::class, 'login_check'])->name('user.login');
Route::post('register/user', [FrontEndController::class, 'register'])->name('user.register');

#course Routes
Route::prefix('course')->group(function(){
    Route::get('/list', [CourseController::class, 'list'])->name('course.list');
    Route::get('/purchased', [CourseController::class, 'purchased_course'])->name('purchased.course');

});

Route::get('view-password', function(){
    return view('frontend.view-password');
});
#support
Route::get('query', [SupportController::class, 'index'])->name('query');
Route::post('submit-query', [SupportController::class, 'leave_query'])->name('submit.query');
