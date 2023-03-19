<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppoinmentRequest;
use App\Http\Requests\UpdateAppoinmentRequest;
use App\Models\Appoinment;
use App\Models\Doctor;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appoinments = Appoinment::latest()->paginate(5);
        return view('appoinment.index', compact('appoinments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('appoinment.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppoinmentRequest $request)
    {
        $request->validated();
        Appoinment::create([
            'patient_id' => auth()->user()->id,
            'doctor_id' => $request['doctor_id'],
            'appointment_date' => $request['appointment_date'],
            'appointment_time' => $request['appointment_time'],
        ]);
        return redirect(url()->previous());
    }

    /**
     * Display the specified resource.
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppoinmentRequest $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appoinment $appoinment)
    {
        //
    }
}
