<?php

namespace App\Http\Controllers;

use App\Jobdetails;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category){
        $jobs = Jobdetails::where('category_id', '=', $category)->get();

        return view('front-end.category', [ 'jobs' => $jobs ]);
    }

}
