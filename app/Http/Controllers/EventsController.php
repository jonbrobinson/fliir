<?php

namespace App\Http\Controllers;

use App;
use App\Fliir\Tools\Calendar;
use App\Http\Requests;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use App\Fliir\Services\Events\EventRepository;

class EventsController extends Controller
{
    protected $event;
    protected $calendar;

    /**
     * @param EventRepository $event
     * @param Calendar $calendar
     */
    public function __construct(EventRepository $event, Calendar $calendar)
    {
        $this->event = $event;
        $this->calendar = $calendar;
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $events = $this->event->getSome();

        return view('events.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $hours = $this->calendar->getTime12Hour();

        return view('events.create', compact("hours"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return Response
     * @internal param Requests $requests
     *
     */
    public function store(EventRequest $request)
    {
        $input = $request->all();

        return $input;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $event = $this->event->getEvent($id);

        if (!$event) {
            abort(404);
        }

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
