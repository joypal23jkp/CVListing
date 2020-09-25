<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CreateCV;
use App\JobCV;
use App\ManageCv;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use phpDocumentor\Reflection\Types\Collection;
use function Sodium\add;

class ManageCvController extends Controller
{
    // This is for managing the CV
    public function index($id = null){
        $job_cv_lists = array();

        // bosta-pocha technique
        if ($id != null){
             $cv_id_list = JobCV::where('job_id', '=', $id)->get();
             foreach ($cv_id_list as $cv){
               array_push($job_cv_lists, ManageCv::find($cv->cv_id));
             }
        }
        else $job_cv_lists = ManageCv::all();

        return view('admin.cv-list.cv-list',[ 'managecv' => $job_cv_lists ]);
    }

    // short the Cv
    public function shortList(){

    }
}

