<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'qr_code',
        'is_attended',
        'checked_in_at',
    ];

}
