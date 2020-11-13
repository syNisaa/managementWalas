<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kelas;


class LandingController extends Controller
{
    //
    public function index(){
        $post = Post::all();
        return view('template.frontpage.home', ['post'=>$post]);
    }

    public function dash(){
        $post = Post::all();
        return view('template.dashboardWalas', ['post'=>$post]);
    }

    public function showkelas(){
        $kelass = Kelas::all();
        return view('template.dashboardWalas', ['kelass' => $kelass]);
    }


    public function checkCode($kelas, $request){
        $kelass = Kelas::find();
    }
}
