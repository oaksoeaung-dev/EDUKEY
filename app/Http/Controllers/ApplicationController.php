<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function home()
    {
        $informations = Application::where("page","home")->get();
        return view("home",compact("informations"));
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function courses()
    {
        return view("courses");
    }

    public function news()
    {
        return view("news");
    }
}
