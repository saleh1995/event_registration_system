<?php

namespace App\Http\Controllers;

use App\Mail\QrCodeMail;
use App\Models\Attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AttendeeRequest;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PublicRegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(AttendeeRequest $request)
    {

        $data = $request->validated();

        $attendee = Attendee::create($data);

        // $qrContent = route('checkin', ['id' => $attendee->id]);

        $qrContent = $attendee->id;

        $qrImage = QrCode::format('png')->size(300)->generate($qrContent);

        $qrFileName = "qrcodes/attendee_{$attendee->id}.png";

        Storage::disk('public')->put($qrFileName, $qrImage);

        $attendee->update(['qr_code' => $qrFileName]);

        Mail::to($attendee->email)->send(new QrCodeMail($attendee));

        return view('success', compact('attendee'));

    }
}

