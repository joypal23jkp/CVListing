<?php

namespace App\Http\Controllers;

use App\JobCV;
use App\ManageCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
   public function index(){
       return view('front-end.home.home');
   }

    public function loginPage(){
        return view('front-end.login.login');
    }

    public function apply($job_id){
       $cv_id = ManageCv::where('candidate_id', '=', Auth::id())->id;
       $job_cv = new JobCV();
       $job_id->job_id = $job_id;
       $job_cv->cv_id = $cv_id;
       if ($job_cv->save()){
           return redirect()->back()->with(['Application Successful!']);
       }
        return redirect()->back()->withErrors(['Dhur Mia, Problem Hoise.']);
     }
}
