<?php

namespace App\Http\Controllers;

use App\About;
use App\CampusLife;
use App\Conference;
use App\Contact;
use App\Course;
use App\Faculty;
use App\Link;
use App\LLCForm;
use App\Mou;
use App\Partnership;
use App\Post;
use App\Project;
use App\Research;
use App\Slider;
use App\Staff;
use App\Student;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      $sliders = Slider::orderBy('id', 'desc')->get();
      return view('index', compact(['posts', 'sliders', 'images', 'links', 'contact']));
    }

    public function posts(){
      $posts = Post::orderBy('id', 'desc')->paginate(20);
      return view('news.news',compact('posts'));
    }

    public function post($id){
      $post = Post::find($id);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('news.news-detail', compact(['post', 'posts']));
    }

    public function history(){
      $history = About::orderBy('id', 'desc')->where('type', 'like', 'HISTORY')->first();
      return view('about.history',compact('history'));
    }

    public function message(){
      $message = About::orderBy('id', 'desc')->where('type', 'like', 'PRESIDENT_MESSAGE')->first();
      return view('about.message', compact('message'));
    }

    public function faculty($id){
      $faculty = Faculty::find($id);
      return view('faculties.facultie', compact('faculty'));
    }

    public function research($type){
      $research = Research::orderBy('id', 'desc')->where('type', 'like', $type)->first();
      return view('Research.libraries', compact('research'));
    }

    public function campus($type){
      $campus = CampusLife::orderBy('id', 'desc')->where('name', 'like', $type)->first();
      return view('campusLife.campus', compact('campus'));
    }

    public function campuses(){
      $campuses = CampusLife::all();
      return view('campusLife.campus-container', compact('campuses'));
    }

    public function staff(){
      $staffs = Staff::all();
      return view('International.staff', compact('staffs'));
    }

    public function cooperation(){
      return view('International.cooperation');
    }

    public function mou(){
      $mous = Mou::all();
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('International.mou', compact(['mous', 'posts']));
    }

    public function projects(){
      $projects = Project::orderBy('id', 'desc')->paginate(10);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('International.projects', compact(['projects', 'posts']));
    }

    public function project($id){
      $project = Project::find($id);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('International.project-detail', compact(['project', 'posts']));
    }

    public function conferences(){
      $conferences = Conference::orderBy('id', 'desc')->paginate(10);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('Research.conferences', compact(['conferences', 'posts']));
    }

    public function conference($id){
      $conference = Conference::find($id);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('Research.conference-detail', compact(['conference', 'posts']));
    }

    public function partnerships(){
      $partnerships = Partnership::orderBy('id', 'desc')->paginate(10);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('International.Partnership', compact(['partnerships', 'posts']));
    }

    public function student($type){
      $student = Student::orderBy('id', 'desc')->where('type', 'like', $type)->first();
      return view('International.student', compact('student'));
    }

    public function forms(){
      $forms = LLCForm::orderBy('id', 'desc')->get();
      return view('llc.forms', compact('forms'));
    }

    public function courses(){
      $courses = Course::orderBy('id', 'desc')->paginate(6);
      return view('llc.courses', compact('courses'));
    }

    public function course($id){
      $course = Course::find($id);
      $posts = Post::orderBy('id', 'desc')->take(4)->get();
      return view('llc.course-detail', compact(['course', 'posts']));
    }
}
