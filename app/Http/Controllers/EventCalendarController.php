<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
    
      $events=Event::all();
      $event=[];
     

      foreach($events as $row)
      {
         $enddate=$row->end_date."24:00:00";
          $event[]= \Calendar::event( 

  $row->title, 
  false,
  new \DateTime($row->start_date),
  new \DateTime($row->end_date),
  $row->id,
  [
      'color' => $row->colour,
  ]


  );

      }
      $calendar = \Calendar::addEvents($event);

     return view('Eventscalender',compact('events','calendar'));
     
    }

     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function display()
    {
       return view('AddnewEvent');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
           'title' => 'required',
           'colour' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
        ]);

        $events = new Event;

        $events->title = $request->input('title');
        $events->colour = $request->input('colour');
        $events->start_date = $request->input('start_date');
         $events->end_date = $request->input('end_date');
        
         $events->save();

         return redirect('events')->with('success','Events Added Successfully');
           
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        $events = Event::all();
        return view('EditEvents')->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        return view('Editform',compact('events','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $this->validate($request,[
           'title' => 'required',
           'colour' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
        ]);

        $events = Event::find($id);

        $events->title = $request->input('title');
        $events->colour = $request->input('colour');
        $events->start_date = $request->input('start_date');
         $events->end_date = $request->input('end_date');
        
         $events->save();

         return redirect('events')->with('success','Events UpdatedSuccessfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events= Event::find($id);
        $events->delete();

        return redirect('events')->with('success','Event Deleted Successfully');
    }



    public function userview()
        {
        $events=Event::all();
        $event=[];
     

      foreach($events as $row)
      {
         $enddate=$row->end_date."24:00:00";
          $event[]= \Calendar::event( 

  $row->title, 
  false,
  new \DateTime($row->start_date),
  new \DateTime($row->end_date),
  $row->id,
  [
      'color' => $row->colour,
  ]


  );

      }
      $calendar = \Calendar::addEvents($event);

     return view('eventsuser',compact('events','calendar'));

        }
    
  public function backtoevent()
    {
       return view('EventsCalender');
    }
   

     public function userviews()
        {
        $events=Event::all();
        $event=[];
     

      foreach($events as $row)
      {
         $enddate=$row->end_date."24:00:00";
          $event[]= \Calendar::event( 

  $row->title, 
  false,
  new \DateTime($row->start_date),
  new \DateTime($row->end_date),
  $row->id,
  [
      'color' => $row->colour,
  ]


  );

      }
      $calendar = \Calendar::addEvents($event);

     return view('ReguserEventsview',compact('events','calendar'));

        }
    
  
}
