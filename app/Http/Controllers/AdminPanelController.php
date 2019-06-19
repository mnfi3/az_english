<?php

namespace App\Http\Controllers;

use App\About;
use App\CampusLife;
use App\Conference;
use App\Contact;
use App\Course;
use App\Department;
use App\Document;
use App\Faculty;
use App\Image;
use App\Link;
use App\LLCForm;
use App\Master;
use App\Message;
use App\Mou;
use App\Partnership;
use App\Post;
use App\Project;
use App\Research;
use App\Slider;
use App\Staff;
use App\Student;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{

    public function __construct() {
      $this->middleware('auth');
    }

    public function home(){
      return view('admin.home');
    }

    public function news(){
      $posts = Post::orderBy('id', 'desc')->get();
      return view('admin.news', compact('posts'));
    }

    public function about(){
      $history = '';
      if(About::orderBy('id', 'desc')->where('type', '=', 'HISTORY')->first() != null){
        $history = About::orderBy('id', 'desc')->where('type', '=', 'HISTORY')->first()->content;
      }
      $message = '';
      if(About::orderBy('id', 'desc')->where('type', '=', 'PRESIDENT_MESSAGE')->first() != null){
        $message = About::orderBy('id', 'desc')->where('type', '=', 'PRESIDENT_MESSAGE')->first()->content;
      }
      $rectors = About::orderBy('id', 'desc')->where('type', '!=', 'PRESIDENT_MESSAGE')
        ->where('type', '!=', 'HISTORY')->get();
      return view('admin.about', compact(['history', 'message', 'rectors']));
    }

    public function academic(){
      $faculties = Faculty::orderBy('id', 'desc')->get();
      return view('admin.academic', compact('faculties'));
    }

    public function researches(){
      $researches = Research::orderBy('id', 'desc')->get();
      return view('admin.research', compact('researches'));
    }

    public function campus(){
      $campuses = CampusLife::all();
      return view('admin.campus', compact('campuses'));
    }

    public function student(){
      $students = Student::all();
      return view('admin.student', compact('students'));
    }

    public function office(){
      $staffs = Staff::all();
      $mous = Mou::all();
      $projects = Project::all();
      $conferences = Conference::all();
      $partnerships = Partnership::all();
      return view('admin.office', compact(['staffs', 'mous', 'projects', 'conferences', 'partnerships']));
    }

    public function llc(){
      $forms = LLCForm::all();
      $courses = Course::all();
      return view('admin.llc', compact(['forms', 'courses']));
    }


    public function contactUs(){
      $contact = Contact::orderBy('id', 'desc')->first();
      $links = Link::all();
      $messages = Message::orderBy('id', 'desc')->paginate(200);
      return view('admin.contact', compact(['contact', 'links', 'messages']));
    }

    public function department(){
      $faculties = Faculty::all();
      $departments = Department::all();
      $masters = Master::orderBy('id', 'desc')->get();
      return view('admin.dep', compact(['faculties', 'masters', 'departments']));
    }


    public function slider(){
      $sliders = Slider::all();
      return view('admin.slider', compact('sliders'));
    }

    public function images(){
      $images = Image::orderBy('id', 'desc')->get();
      return view('admin.image', compact('images'));
    }


}
