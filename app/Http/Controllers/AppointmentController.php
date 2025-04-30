<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $appointments = [];

        if ($user->isLawyer()) {
            $appointments = Appointment::where('_id', $user->id)
                ->with(['client'])
                ->latest()
                ->paginate(10);
        }  elseif ($user->isAdmin()) {
            $appointments = Appointment::with(['', 'client'])
                ->latest()
                ->paginate(10);
        }

        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $lawyers = User::where('role', '')
            ->where('status', 'active')
            ->get();
        return view('appointments.create', compact(''));
    }

    public function store(Request $request)
    {
        $request->validate([
            '_id' => 'required|exists:users,id',
            'appointment_date' => 'required|date|after:today',
            'appointment_time' => 'required',
            'case_type' => 'required|string',
            'description' => 'required|string',
        ]);

        $appointment = new Appointment();
        $appointment->client_id = Auth::id();
        $appointment->lawyer_id = $request->lawyer_id;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_time = $request->appointment_time;
        $appointment->case_type = $request->case_type;
        $appointment->description = $request->description;
        $appointment->status = 'pending';
        $appointment->save();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment request has been submitted successfully.');
    }

    public function show(Appointment $appointment)
    {
        $this->authorize('view', $appointment);
        return view('appointments.show', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $this->authorize('update', $appointment);
        
        $request->validate([
            'status' => 'required|in:approved,rejected,completed',
        ]);

        $appointment->status = $request->status;
        $appointment->save();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment status has been updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $this->authorize('delete', $appointment);
        
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment has been cancelled successfully.');
    }
} 