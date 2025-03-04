<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Event;

class GuestController extends Controller
{

    /**
     * Home page default page for all users to view
     * @return \view
     */
    public function index()
    {
        $events = Event::all();
        return view('welcome', compact('events'));
    }
}