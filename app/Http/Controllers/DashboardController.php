<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//php artisan make:controller

class DashboardController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
