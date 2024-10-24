<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseCT extends Controller
{
    public function index() {
        return view("user.course.index");
    }
}
