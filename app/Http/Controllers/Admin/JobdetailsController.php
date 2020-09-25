<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Jobdetails;
use Illuminate\Http\Request;

class JobdetailsController extends Controller
{
    public function index(){
        $jobdetails = Jobdetails::all();
        $categories = Category::all();

        return view('admin.jobdetails.job-details',[
            'jobdetails' =>$jobdetails,
            'categories'=>$categories
        ]);
    }

     public function saveJobDetails(Request $request){
//         $categories = Category::all();
//         return view('admin.jobdetails.job-details',[
//             'categories'=>$categories
//         ]);

        $jobdetails = new Jobdetails();

         $jobdetails->job_title = $request->job_title;
         $jobdetails->company_name = $request->company_name;
         $jobdetails->vacancy = $request->vacancy;
         $jobdetails->job_responsibilities = $request->job_responsibilities;
         $jobdetails->employee_status = $request->employee_status;
         $jobdetails->educational_requirement = $request->educational_requirement;
         $jobdetails->experience_requirement = $request->experience_requirement;
         $jobdetails->additional_requirement = $request->additional_requirement;
         $jobdetails->job_location = $request->job_location;
         $jobdetails->salary = $request->salary;
         $jobdetails->category_id = $request->category_id;
//         $jobdetails->status = $request->status;
         $jobdetails->save();

         return redirect()->back()->with('message','Job Details Added Successfully');

     }

    public function unpublishedjobDetails($id){
        $jobdetails = Jobdetails::find($id);
        $jobdetails->status = 0;
        $jobdetails->save();

        return back();
    }
    public function publishedjobDetails($id){
        $jobdetails = Jobdetails::find($id);
        $jobdetails->status = 1;
        $jobdetails->save();

        return back();
    }

    public function deletejobDetails($id){
        $jobdetails = Jobdetails::find($id);
        $jobdetails->delete();

        return back()->with('message','Category Deleted Successfully');

    }
    public function updateJobDetails(Request $request){
        $jobdetails = new Jobdetails();
        $jobdetails = Jobdetails::find($request->id);

        $jobdetails->job_title = $request->job_title;
        $jobdetails->company_name = $request->company_name;
        $jobdetails->vacancy = $request->vacancy;
        $jobdetails->job_responsibilities = $request->job_responsibilities;
        $jobdetails->employee_status = $request->employee_status;
        $jobdetails->educational_requirement = $request->educational_requirement;
        $jobdetails->experience_requirement = $request->experience_requirement;
        $jobdetails->additional_requirement = $request->additional_requirement;
        $jobdetails->job_location = $request->job_location;
        $jobdetails->salary = $request->salary;
        $jobdetails->category_id = $request->category_id;
//        $jobdetails->status = $request->status;
        $jobdetails->save();

        return redirect()->back()->with('message','Job Details updated Successfully');

    }




}
