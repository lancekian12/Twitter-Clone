<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

//php artisan make:controller

class DashboardController extends Controller
{
    public function index() {
        // $idea = new Idea(['content' => 'Hello Lance Kian Flores']);

        // $idea->save();

        return view('dashboard', ['ideas' => Idea::orderBy('created_at', 'DESC')-> get()]);
    }
}
