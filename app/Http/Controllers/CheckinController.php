<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;


class CheckinController extends Controller
{
    public function show($id)
    {
        $attendee = Attendee::findOrFail($id);

        return view('checkin', compact('attendee'));
    }

    public function process(Request $request, $id)
    {
        $attendee = Attendee::findOrFail($id);

        if ($attendee->checked_in_at) {
            return back()->with('status', __('checkin.already_checked_in'));
        }

        $attendee->update([
            'checked_in_at' => now(),
        ]);

        return back()->with('status', __('checkin.success'));
    }
}

