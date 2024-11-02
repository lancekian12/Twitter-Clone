<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//php artisan make:controller

class DashboardController extends Controller
{
    public function index() {
        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ]
            ,
            [
                'name' => 'John',
                'age' => 17,
            ]
            ];
        return view('dashboard', ['users' => $users]);
    }
}
