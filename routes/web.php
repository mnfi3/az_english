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
Route::get('/login', function () {
  return view('admin.logIn');
})->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');









//Admin
Route::middleware('auth')->group(function () {
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

//  Route::get('/admin-course', function () {
//    return view('admin.course');
//  });





  Route::post('/post-add', 'PostController@add');
  Route::post('/post-remove', 'PostController@remove');
  Route::post('/history-add', 'AboutController@historyAdd');
  Route::get('/history-remove', 'AboutController@historyRemove');
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


});











Route::get('/', 'SiteController@index');
Route::get('/news', 'SiteController@posts');
Route::get('/news-detail/{id}', 'SiteController@post');



Route::get('/contact-us', function () {
  return view('contact-us');
});
Route::get('/about-us', function () {
  return view('about-us');
});
Route::get('/news-not-found', function () {
  return view('news.not-found');
});

//Research


Route::get('/conferences', function () {
  return view('Research.conferences');
});
Route::get('/conference-detail', function () {
  return view('Research.conference-detail');
});


Route::get('/libraries', function () {
  return view('Research.libraries');
});

//Internation

Route::get('/mou', function () {
  return view('International.mou');
});
Route::get('/Partnership', function () {
  return view('International.Partnership');
});
Route::get('/cooperation', function () {
  return view('International.cooperation');
});
Route::get('/staff', function () {
  return view('International.staff');
});
Route::get('/projects', function () {
  return view('International.projects');
});
Route::get('/student', function () {
  return view('International.student');
});
Route::get('/project-detail', function () {
  return view('International.project-detail');
});

Route::get('/courses', function(){
  return view('llc.courses');
});
Route::get('/forms', function(){
  return view('llc.forms');
});
Route::get('/course-detail', function(){
  return view('llc.course-detail');
});


//Faculties
Route::get('/dep', function () {
  return view('faculties.dep');
});
Route::get('/faculty', function () {
  return view('faculties.facultie');
});

//CampusLife
Route::get('/campus', function () {

  return view('campusLife.campus');
});
Route::get('/campus-container', function () {

  return view('campusLife.campus-container');
});

//About
Route::get('/history', function () {

  return view('about.history');
});
Route::get('/message', function () {

  return view('about.message');
});








