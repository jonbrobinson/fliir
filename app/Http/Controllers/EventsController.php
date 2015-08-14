<?php

namespace App\Http\Controllers;

use App\Fliir\Services\Events\EventRepository;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    protected $event;

    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $output = $this->event->getAll();
        $new = json_decode(json_encode($output), true);

        return view('pages.events', ["output" => $new]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
