<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\BootcampRegistration;
use App\Mail\ScholarshipConfirmation;
use \App\Models\Event;
use \App\Models\Participant;
use \App\Models\GalleryImage;
use \App\Models\BootCamp;
use \App\Models\Scholarship;
use App\Exports\BootcampsExport;
use Maatwebsite\Excel\Facades\Excel;


class EventController extends Controller
{


    public function index(Request $request)
    {
        $events = GalleryImage::all();
        $upcoming = Event::all();

        return view('event')->with(['events' => $events, 'upcoming' => $upcoming]);
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    public function createEvent(Request $request)
    {
        return view('event.create-event');
    }

    public function storeEvent(FormValidatorRequest $request)
    {
        if ($request->hasFile('upload')) {
            $createEvent = Event::storeEvent($request);
            return redirect(route('event.dashboard'))->with('message', $request->name . ' event created');
        }

        return redirect()->back()->with('error', 'Failed to create event ' . $request->name);
    }

    public function editEvent(Event $event, Request $request)
    {
        return view('event.edit', compact('event'));
    }

    public function updateEvent(Event $event, EditEventRequest $request)
    {
        if ($request->hasFile('upload')) {
            $response = Event::updateEvent($request);
            return redirect(route('event.dashboard'))->with(['message' => $event->name . ' updated']);
        } else {
            $response = Event::updateEvent($request);
            return redirect(route('event.dashboard'))->with(['message' => $event->name . ' updated']);
        }
        return redirect(route('event.dashboard'))->with(['error' => 'Failed to update ' . $event->name]);
    }

    public function delete(Event $event)
    {
        $event->delete();
        return redirect(route('event.dashboard'))->with(['message' => $event->name . ' Deleted']);
    }

    public function eventDashboard(Request $request)
    {
        $events = Event::all()->sortBy('created_at');
        return view('event.events', compact(['events']));
    }

    public function participant(Event $event, Request $request)
    {
        return view('participant.create', compact('event'));
    }

    public function storeParticipant(ParticipantRequest $request)
    {
        Participant::storeParticipant($request);
        return redirect()->back()->with(['message' => 'You have registered']);
    }

    public function participantsIndex(Request $request)
    {
        $participants = Participant::all();
        return view('participant.index', compact('participants'));
    }


    public function viewParticipant(Request $request, Participant $participant)
    {
        return view('participant.view', compact('participant'));
    }

    public function editParticipant(Request $request, Participant $participant)
    {
        return view('participant.edit', compact('participant'));
    }

    public function updateParticipant(ParticipantRequest $request, Participant $participant)
    {
        $participant->updateParticipant($request);
        return redirect(route('participants'))->with(['message' => $participant->first_name . ' updated']);
    }

    public function uploadPastEventPicture()
    {
        $events = GalleryImage::all();
        return view('event.upload_event', compact('events'));
    }

    public function showPastEvent(GalleryImage $event)
    {
        return view('event.past_event', compact('event'));
    }

    public function editPastEvent(GalleryImage $event)
    {
        return view('event.edit_past_event', compact('event'));
    }

    public function updatePastEvent(GalleryImageRequest $request)
    {
        if ($request->hasFile('uploadPhoto')) {
            GalleryImage::updateGallery($request);
            return redirect(route('event.past'))->with(['message' => $request->name . ' updated']);
        }
        return redirect(route('event.past'))->with(['error' => $request->name . ' failed to updated']);
    }

    public function deletePastEvent(GalleryImage $event)
    {
        $event->delete();
        return redirect()->back()->with(['message' => $event->name . ' deleted']);
    }
    public function DataScienceBootcampIndex(Request $request)
    {
        $participants = Participant::all();
        return view('Bootcamp.data-science', compact('participants'));
    }
    public function DataAcademyAfricaIndex(Request $request)
    {
        $participants = Participant::all();
        return view('Bootcamp.data-academy', compact('participants'));
    }
    // public function storeDataScienceBootcamp(Request $request)
    // {
    //     $validated = $request->validate([
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:15',
    //         'country' => 'required|string|max:255',
    //         'jobtitle' => 'required|string|max:255',
    //         'joinas' => 'required|string|in:Student,Trainer,Admin',
    //     ]);

    //     $validated['eventtype'] = 'DataScience';

    //     try {
    //         // Check for existing registration with same email AND event type
    //         $exists = BootCamp::where('email', $validated['email'])
    //             ->where('eventtype', 'DataScience')
    //             ->exists();

    //         if ($exists) {
    //             return redirect()->back()
    //                 ->withInput()
    //                 ->withErrors([
    //                     'email' => 'This email is already registered for Data Science Bootcamp.'
    //                 ]);
    //         }

    //         BootCamp::create($validated);

    //         return redirect()->back()
    //             ->with('success', 'Data Science Bootcamp registration successful!');
    //     } catch (\Exception $e) {
    //         return redirect()->back()
    //             ->withInput()
    //             ->withErrors([
    //                 'error' => 'Registration failed. Please try again later.'
    //             ]);
    //     }
    // }


    public function storeDataAcademyAfrica(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'jobtitle' => 'required|string|max:255',
            'joinas' => 'required|string|in:Student',
        ]);

        $validated['eventtype'] = 'DataAcademy';

        try {
            // Check for existing registration with same email AND event type
            $exists = BootCamp::where('email', $validated['email'])
                ->where('eventtype', 'DataAcademy')
                ->exists();

            if ($exists) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors([
                        'email' => 'This email is already registered for Data Academy Bootcamp.'
                    ]);
            }

            BootCamp::create($validated);

            return redirect()->back()
                ->with('success', 'Data Academy registration successful!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'error' => 'Registration failed. Please try again later.'
                ]);
        }
    }
    public function bootcampDataacademy(Request $request)
    {
        $bootcamps = BootCamp::where('eventtype', 'DataAcademy')->get();
        return view('Bootcamp.register.data-academy', compact('bootcamps'));
    }
    public function bootcampDatascience(Request $request)
    {
        $bootcamps = BootCamp::where('eventtype', 'DataScience')->get();
        return view('Bootcamp.register.data-science', compact('bootcamps'));
    }
    public function exportBootcamps($eventtype)
    {
        return Excel::download(new BootcampsExport($eventtype), 'bootcamps_' . $eventtype . '.xlsx');
    }

    public function storeDataScienceBootcamp(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'jobtitle' => 'required|string|max:255',
            'joinas' => 'required|string|in:Student,Trainer,Admin',
        ]);

        $validated['eventtype'] = 'DataScience';

        try {
            // Check for existing registration
            $exists = BootCamp::where('email', $validated['email'])
                ->where('eventtype', 'DataScience')
                ->exists();

            if ($exists) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors([
                        'email' => 'This email is already registered for Data Science Bootcamp.'
                    ]);
            }

            // Generate token and create record in one operation
            $registration = BootCamp::create(array_merge($validated, [
                'scholarship_token' => Str::random(40)
            ]));

            // Send email (using send instead of queue for immediate delivery)
            Mail::to($validated['email'])->send(new BootcampRegistration(
                $validated['firstname'],
                $validated['lastname'],
                route('scholarship.apply', ['token' => $registration->scholarship_token])
            ));

            return redirect()->back()
                ->with('success', 'Registration successful! Check your email for scholarship link.');
        } catch (\Exception $e) {
            \Log::error('Registration Error: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'error' => 'Registration failed. Please try again. ' .
                        (config('app.debug') ? $e->getMessage() : '')
                ]);
        }
    }

    public function showScholarshipForm($token)
    {
        // Verify the token
        $registration = BootCamp::where('scholarship_token', $token)->firstOrFail();

        return view('scholarship-form', [
            'token' => $token,
            'email' => $registration->email,
            'firstname' => $registration->firstname,
            'lastname' => $registration->lastname
        ]);
    }

    public function storeScholarshipApplication(Request $request)
    {
        $validated = $request->validate([
            'token' => 'required|string',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'why_apply' => 'required|string|min:50|max:1000',
            'referral_source' => 'nullable|string|max:255',
        ]);

        try {
            // Verify token is still valid
            $registration = BootCamp::where('scholarship_token', $validated['token'])
                ->where('email', $validated['email'])
                ->firstOrFail();

            // Create scholarship application
            Scholarship::create($validated);

            // Send confirmation email
            Mail::to($validated['email'])->send(new ScholarshipConfirmation(
                $validated['firstname'],
                $validated['lastname']
            ));

            // Clear the token so it can't be used again
            $registration->update(['scholarship_token' => null]);

            return redirect()->route('scholarship.thankyou');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'error' => 'Scholarship application failed. Please try again later.'
                ]);
        }
    }
}
