<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\department;
use  App\Models\course;


class notificationController extends Controller
{
    public function  departments (){


        $store=department::all();
        return view('notification.dept')
        ->with('store',$store);
    }

    public function courses($cid){
        
        $store=course::where('cid',$cid)->first();
        return view('notification.course')
        ->with('store',$store);
    }
}
