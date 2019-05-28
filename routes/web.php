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







//Auth::routes();
Route::get('/asmu-admin-login', function () {
  return view('admin.logIn');
})->middleware('guest');
Route::post('asmu-admin-login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');





//Admin------------------------------------------------------------------

//home
Route::get('/admin-home', 'AdminPanelController@home');
Route::get('/admin-news', 'AdminPanelController@news');
Route::get('/admin-about', 'AdminPanelController@about');
Route::get('/admin-academic', 'AdminPanelController@academic');
Route::get('/admin-research', 'AdminPanelController@researches');
Route::get('/admin-campus','AdminPanelController@campus');
Route::get('/admin-student', 'AdminPanelController@student');
Route::get('/admin-office', 'AdminPanelController@office');
Route::get('/admin-llc', 'AdminPanelController@llc');
Route::get('/admin-contact', 'AdminPanelController@contactUs');
Route::get('/admin-dep', 'AdminPanelController@department');
Route::get('/admin-slider', 'AdminPanelController@slider');
Route::get('/admin-image', 'AdminPanelController@images');


Route::post('/post-add', 'PostController@add');
Route::post('/post-remove', 'PostController@remove');
Route::post('/history-add', 'AboutController@historyAdd');
Route::get('/history-remove', 'AboutController@historyRemove');
Route::post('/rector-add', 'AboutController@rectorAdd');
Route::get('/rector-remove/{id}', 'AboutController@rectorRemove');
Route::post('/president-message-add', 'AboutController@presidentMessageAdd');
Route::get('/president-message-remove', 'AboutController@presidentMessageRemove');
Route::post('/faculty-add', 'FacultyController@add');
Route::post('/faculty-remove', 'FacultyController@remove');
Route::post('/research-add', 'ResearchController@add');
Route::post('/research-remove', 'ResearchController@remove');
Route::post('/campus-add', 'CampusController@add');
Route::post('/campus-remove', 'CampusController@remove');
Route::post('/student-add', 'StudentController@add');
Route::post('/student-remove', 'StudentController@remove');
Route::post('/staff-add', 'OfficeController@staffAdd');
Route::post('/staff-remove', 'OfficeController@staffRemove');
Route::post('/mou-add', 'OfficeController@mouAdd');
Route::post('/mou-remove', 'OfficeController@mouRemove');
Route::post('/project-add', 'OfficeController@projectAdd');
Route::post('/project-remove', 'OfficeController@projectRemove');
Route::post('/conference-add', 'OfficeController@conferenceAdd');
Route::post('/conference-remove', 'OfficeController@conferenceRemove');
Route::post('/partnership-add', 'OfficeController@partnershipAdd');
Route::post('/partnership-remove', 'OfficeController@partnershipRemove');
Route::post('/llc-add', 'LlcController@llcAdd');
Route::post('/llc-remove', 'LlcController@llcRemove');
Route::post('/course-add', 'LlcController@courseAdd');
Route::post('/course-remove', 'LlcController@courseRemove');
Route::post('/contact-add', 'ContactController@contactAdd');
Route::get('/contact-remove', 'ContactController@contactRemove');
Route::post('/link-add', 'ContactController@linkAdd');
Route::post('/link-remove', 'ContactController@linkRemove');
Route::post('/department-add', 'DepartmentController@departmentAdd');
Route::post('/department-remove', 'DepartmentController@departmentRemove');
Route::post('/master-add', 'DepartmentController@masterAdd');
Route::post('/master-remove', 'DepartmentController@masterRemove');
Route::post('/slider-add', 'SliderController@add');
Route::post('/slider-remove', 'SliderController@remove');
Route::post('/image-add', 'SliderController@imageAdd');
Route::get('/admin-master-edit/{id}', 'DepartmentController@masterEditPage');
Route::post('/admin-master-edit', 'DepartmentController@masterEdit');


//import masters from excel file
//  Route::get('/import-masters', 'DepartmentController@import');

//get backup from system
Route::get('/admin-backup', 'BackupController@index')->name('admin-backup');


//end Admin-----------------------------------------------------------------------




Route::get('/', 'SiteController@index');
Route::get('/news', 'SiteController@posts');
Route::get('/news-detail/{id}', 'SiteController@post');
Route::get('/history', 'SiteController@history');
Route::get('/rectors/{type}', 'SiteController@rectors');
Route::get('/message', 'SiteController@message');
Route::get('/faculty/{id}', 'SiteController@faculty');
Route::get('/research/{type}', 'SiteController@research');
Route::get('/campus-life/{type}', 'SiteController@campus');
Route::get('/campus-container', 'SiteController@campuses');
Route::get('/staff', 'SiteController@staff');
Route::get('/cooperation', 'SiteController@cooperation');
Route::get('/mou', 'SiteController@mou');
Route::get('/projects', 'SiteController@projects');
Route::get('/project-detail/{id}', 'SiteController@project');
Route::get('/conferences', 'SiteController@conferences');
Route::get('/conference-detail/{id}', 'SiteController@conference');
Route::get('/partnerships', 'SiteController@partnerships');
Route::get('/student/{type}', 'SiteController@student');
Route::get('/forms', 'SiteController@forms');
Route::get('/courses', 'SiteController@courses');
Route::get('/course-detail/{id}', 'SiteController@course');
Route::get('/contact-us', 'SiteController@contact');
Route::post('/message-send', 'SiteController@messageSend');
Route::get('/search', 'SiteController@search');

