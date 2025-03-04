<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Models\QuizDebate;
use App\Mail\NominateSchoolMail;

class QuizController extends Controller
{
    public function index() {
        return view('quiz.index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'institution' => ['required', 'string', 'max:255'],
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'institution' => ['required', 'string', 'max:255'],
            'institution_type' => ['required', 'string', 'max:255'],
            'institution_email' => ['required', 'string', 'max:255'],
        ]);

        $nominate = QuizDebate::nominateSchool($request);
        Mail::to($nominate->email)->send(new NominateSchoolMail($request->first_name));
        Mail::to($nominate->institution_email)->send(new NominateSchoolMail($request->first_name));
        return redirect()->back()->with(
            ['message' => 'Hi '.$nominate->full_name.', you have nominate '. $nominate->institution.'. We will get back to you soon']
        );
     }
}
