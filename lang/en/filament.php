<?php

return [
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'statistics' => 'Statistics',
    'row' => 'row',

    'user' => [
        'singular' => 'User',
        'plural' => 'Users',
        'navigation' => 'Users',

        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
    ],

    'attendee' => [
        'singular' => 'Attendee',
        'plural' => 'Attendees',
        'navigation' => 'Attendees',

        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone Number',
        'qr_code' => 'QR Code',
        'is_attended' => 'Attended',
        'checked_in_at' => 'Check-in Time',
    ],

    'stats' => [
        'total' => 'Total Registered',
        'attended' => 'Attended',
        'absent' => 'Absent',
    ],

    'actions' => [
        'export_excel' => 'Export Excel',
    ],

    'export' => [
        'completed' => 'Attendee export completed successfully, :count :rows exported.',
        'failed_to_export' => 'failed to export',
        'success_statistics' => 'Statistics export completed successfully, :count :rows exported.'
    ],
];
