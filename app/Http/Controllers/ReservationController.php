<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Reservation::where('date','<',Carbon::now())->delete();
        $resevrations = Reservation::all();
        return view('admin.resevations.indexResevation', compact('resevrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        return view('admin.resevations.addResevation', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id'        => 'required',
            'date'              =>'required|date|unique:reservations,date',
        ]);
        Reservation::create([
            'patient_id'    => $request->patient_id,
            'date'          =>  $request->date,
        ]);
        return redirect()->route('reservations.index')->with([
            'success' => 'Created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation_selected=Reservation::find($id);
        return view('admin.resevations.editResevation',compact('reservation_selected'));
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
        $request->validate([
            'date'  =>  'date|unique:reservations,date,'.$id,
        ]);
        Reservation::find($id)->update([
            'date'=>$request->date,
        ]);
        return redirect()->route('patients.index')->with([
            'success' => 'Updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}
