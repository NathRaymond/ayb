<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Event;
use \App\Models\GalleryImage;

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

    public function participants(Request $request)
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

}