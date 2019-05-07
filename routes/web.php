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
//News
Route::get('/news', function () {
  return view('news.news');
});
Route::get('/test', function () {
  return view('test');
});
Route::get('/news-detail', function () {
  return view('news.news-detail');
});
Route::get('/', function () {
    return view('index');
});
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






//Adimin
Route::get('/login', function () {

  return view('admin.logIn');
});
Route::get('/admin-home', function () {

  return view('admin.home');
});
Route::get('/admin-about', function () {

  return view('admin.about');
});
Route::get('/admin-news', function () {

  return view('admin.news');
});
Route::get('/admin-academic', function () {

  return view('admin.academic');
});
Route::get('/admin-dep', function () {

  return view('admin.dep');
});

Route::get('/admin-campus', function () {

  return view('admin.campus');
});
Route::get('/admin-research', function () {

  return view('admin.research');
});
Route::get('/admin-student', function () {

  return view('admin.student');
});
Route::get('/admin-office', function () {

  return view('admin.office');
});
Route::get('/admin-llc', function () {

  return view('admin.llc');
});
Route::get('/admin-contact', function () {

  return view('admin.contact');
});
Route::get('/admin-slider', function () {

  return view('admin.slider');
});
Route::get('/admin-course', function () {
  return view('admin.course');
});
Route::get('/admin-image', function () {
  return view('admin.image');
});
Route::get('/admin-master-edit', function () {
  return view('admin.masterEdit');
});

