<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Reservation::where('date','<',Carbon::now())->delete();
        $patients = Patient::query()
            ->when(request()->keyword != null, function ($query) {
                $query->search(request()->keyword);
            })
            ->when(request()->status != null, function ($query) {
                $query->where('treatment_state', '=', request()->status);
            })
            ->orderBy(request()->sort_by ?? 'id', request()->order_by ?? 'desc')->get();
        return view('admin.patients.indexPatient',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.addPatient');
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
            'name'              => 'required|min:10|max:30|unique:patients,name',
            'phone'             => 'required|numeric',
            'treatment_state'   => 'nullable',
            'identity_number'   => 'required|numeric|unique:patients,identity_number',
        ]);
        Patient::create([
            'name'              => $request->name,
            'phone'             => $request->phone,
            'treatment_state'   => $request->treatment_state,
            'identity_number'   => $request->identity_number,
        ]);
        return redirect()->route('patients.index')->with([
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
        $patient = Patient::find($id);
        return view('admin.patients.showPatient', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('admin.patients.EditPatient', compact('patient'));
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
            'name'              => 'required|min:10|max:30|unique:patients,name,'.$id,
            'phone'             => 'required|numeric',
            'treatment_state'   => 'nullable',
            'identity_number'   => 'required|numeric|unique:patients,identity_number,'.$id,
        ]);
        Patient::find($id)->update([
            'name'              => $request->name,
            'phone'             => $request->phone,
            'treatment_state'   => $request->treatment_state,
            'identity_number'   => $request->identity_number,
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
        //
    }

}
