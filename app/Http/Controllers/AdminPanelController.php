<?php

namespace App\Http\Controllers;

use App\About;
use App\CampusLife;
use App\Conference;
use App\Course;
use App\Document;
use App\Faculty;
use App\Image;
use App\LLCForm;
use App\Mou;
use App\Partnership;
use App\Post;
use App\Project;
use App\Research;
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
      return view('admin.about', compact(['history', 'message']));
    }

    public function academic(){
      $faculties = Faculty::orderBy('id', 'desc')->get();
      return view('admin.academic', compact('faculties'));
    }

    public function researches(){
      $researches = Research::all();
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


}
