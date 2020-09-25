<?php

namespace App\Http\Controllers;
use App\Candidate;
use App\CreateCV;
use App\Education;
use App\Experience;
use App\Http\Controllers\Controller;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyProfileController extends Controller
{
    // Show add CV form
    public function index(){
       if (CreateCV::where('candidate_id', '=', Auth::user()->id)->first())
           return redirect('/')->with('message','Already Have one.');

       return view('front-end.create-cv.create-cv');
   }

    // Save CV
    public function saveCvDetails(Request $request){

       if (CreateCV::where('candidate_id', '=', Auth::user()->id)->first())
           return redirect('/')->with('message','Already Have one.');

        $createCV = new CreateCV();
        $createCV->first_name   =   $request->first_name;
        $createCV->last_name    =   $request->last_name;
        $createCV->father_name  =   $request->father_name;
        $createCV->mother_name  =   $request->mother_name;
        $createCV->email        =   $request->email;
        $createCV->gender       =   $request->gender;
        $createCV->address      =   $request->address;
        $createCV->contact      =   $request->contact;
        $createCV->candidate_id =   Auth::user()->id;
        $createCV->save();

        return redirect()->back()->with('message','Job Details Added Successfully');
    }

    // Showing some cv.
    public function showCv(){
        $cv = CreateCV::where('candidate_id', '=', Auth::user()->id)->first();
        $experience = Experience::where('cv_id', '=', $cv->id)->get();
        $education = Education::where('cv_id', '=', $cv->id)->get();
        $skills = Skill::where('cv_id', '=', $cv->id)->get();

       return view('front-end.create-cv.viewCv', ['cv' => $cv, 'experiences' => $experience, 'education' => $education, 'skills' => $skills]);
    }

    // Adding Experience to CV.
    public function addExperience(Request $request){
       $experience = new Experience();
       $experience->position = $request->position;
       $experience->org_name = $request->org_name;
       $experience->year_of_exprience = $request->year_of_exprience;
       $experience->cv_id = $request->cv_id;
       if ($experience->save()){
           return redirect()->back()->with('message','Experience Added Successfully');
       }
    }


    public function addEducation(Request $request){
        $education = new Education();
        $education->title = $request->title;
        $education->academic_year = $request->academic_year;
        $education->result = $request->result;
        $education->cv_id = $request->cv_id;
        if ($education->save()){
            return redirect()->back()->with('message','Education Added Successfully');
        }
    }

    public function addSkills(Request $request){
        $skills = new Skill();
        $skills->title = $request->title;
        $skills->cv_id = $request->cv_id;
        if ($skills->save()){
            return redirect()->back()->with('message','Education Added Successfully');
        }
    }
}
