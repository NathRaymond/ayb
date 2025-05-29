<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeetUp;

class MeetUpController extends Controller
{
   public function index(Request $request)
    {
        return view('meetups.index');
    }

    public function store(Request $request)
    {
        MeetUp::storeParticipant($request);
        return redirect()->back()->with(['message' => 'You have registered']);
    }
}