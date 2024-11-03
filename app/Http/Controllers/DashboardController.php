<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

//php artisan make:controller

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard', ['ideas' => Idea::orderBy('created_at', 'DESC')->paginate(5)]);
    }
}
