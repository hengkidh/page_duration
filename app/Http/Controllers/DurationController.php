<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use Illuminate\Http\Request;

class DurationController extends Controller
{
    //
    public function index()
    {
        return view('duration');
    }

    public function store(Request $request)
    {
        $duration = new Duration();
        $duration->duration = $request->duration;
        $duration->save();
    }

    public function getDurations()
    {
        $durations = Duration::all();
        return view('show', compact('durations'));
    }
}
