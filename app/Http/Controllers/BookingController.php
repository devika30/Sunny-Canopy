<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('rooms.index')->with('bookings',$bookings);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'check_in_date'=>'required',
            'check_out_date'=>'required',
            'no_of_people'=>'required',
            'no_of_bed'=>'required',
            'type_of_room'=>'required',
            //'user_id'=>'null',
            //'room_id'=>'null',
            ]);
        //create new booking

        $book = new Booking;
        $book->check_in_date=$request->input('check_in_date');
        $book->check_out_date=$request->input('check_out_date');
        $book->no_of_people=$request->input('no_of_people');
        $book->no_of_bed=$request->input('no_of_bed');
        $book->type_of_room=$request->input('type_of_room');
        $book->user_id=auth()->user()->id;
        $book->save();
        return redirect('/room')->with('success','room_booked');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {           
       
        return view('rooms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings=Booking::all();
        return view('rooms.edit')->with('bookings',$bookings); 
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
            'check_in_date'=>'required',
            'check_out_date'=>'required',
            'no_of_people'=>'required',
            'no_of_bed'=>'required',
            'type_of_room'=>'required',
            //'user_id'=>'null',
            //'room_id'=>'null',
            ]);
        //create new booking

        $book =Booking::find($id);
        $book->check_in_date=$request->input('check_in_date');
        $book->check_out_date=$request->input('check_out_date');
        $book->no_of_people=$request->input('no_of_people');
        $book->no_of_bed=$request->input('no_of_bed');
        $book->type_of_room=$request->input('type_of_room');
        $book->save();
        return redirect('/room')->with('success','room_booked');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
