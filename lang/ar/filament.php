<?php

return [
    'created_at' => 'تاريخ الإنشاء',
    'updated_at' => 'تاريخ التحديث',

    'user' => [
        'singular' => 'مستخدم',
        'plural' => 'مستخدمون',
        'navigation' => 'المستخدمون',

        'name' => 'الإسم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
    ],


    'attendee' => [
        'singular' => 'مشارك',
        'plural' => 'المشاركون',
        'navigation' => 'المشاركون',

        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الجوال',
        'qr_code' => 'رمز QR',
        'is_attended' => 'تم الحضور',
        'checked_in_at' => 'وقت الدخول',
    ],


    'stats' => [
        'total' => 'عدد المسجلين',
        'attended' => 'عدد الحاضرين',
        'absent' => 'عدد الغائبين',
    ],

    'actions' => [
        'export_excel' => 'تصدير Excel',
    ],

    'export' => [
        'completed' => 'تم إكمال تصدير المشاركين، وتم تصدير :count :rows بنجاح.',
        'failed_to_export' => 'فشلت في التصدير',
    ],
];
