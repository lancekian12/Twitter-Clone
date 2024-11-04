<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

//php artisan make:controller

class DashboardController extends Controller
{
    public function index()
    {
        $ideas = Idea::orderBy('created_at', 'DESC');

        // content = test
        // content like %test%
        if (request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' .  request()->get('search') . '%');
        }

        return view('dashboard', ['ideas' => $ideas->paginate(5)]);
    }
}
