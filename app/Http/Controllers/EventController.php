<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    /**
     * Show all events
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
        return view('event.index', [
            'events' => Event::query()->with('teamHome', 'teamGuest')->get()
        ]);
    }
    /**
     * Insert new event on database
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'team_home_id'  => [ 'required', 'integer' ],
            'team_guest_id' => [ 'required', 'integer' ],
            'score_home'    => [ 'required', 'integer' ],
            'score_guest'   => [ 'required', 'integer' ],
            'group'         => [ 'required', 'string' ],
            'start'         => [ 'required', 'date' ],
            'location'      => [ 'required', 'string' ],
        ]);
        Event::query()->create($data);
        return redirect()->back()->with('success', 'Event created successfully');
    }

    /**
     * Delete an event from database
     * @param Event $event
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Event $event): RedirectResponse
    {
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully');
    }

    /**
     * Update an event on database
     * @param Event $event
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Event $event): RedirectResponse
    {
        $data = request()->validate([
            'id'            => [ 'required', 'integer' ],
            'team_home_id'  => [ 'required', 'integer' ],
            'team_guest_id' => [ 'required', 'integer' ],
            'score_home'    => [ 'required', 'integer' ],
            'score_guest'   => [ 'required', 'integer' ],
            'group'         => [ 'required', 'string' ],
            'start'         => [ 'required', 'date' ],
            'location'      => [ 'required', 'string' ],
        ]);
        $event->query()->where('id', $data['id'])->update($data);
        return redirect()->back()->with('success', 'Event updated successfully');
    }

}
