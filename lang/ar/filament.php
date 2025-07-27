<?php

return [
    'created_at' => 'تاريخ الإنشاء',
    'updated_at' => 'تاريخ التحديث',
    'statistics' => 'الإحصائيات',
    'row' => 'سطر',

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
        'attend' => 'تأكيد الحضور',
        'not_attend' => 'إلغاء الحضور',
        'confirm_attend' => 'تأكيد الحضور',
        'confirm_attend_description' => 'هل أنت متأكد من تأكيد حضور هذا المشارك؟',
        'confirm_not_attend' => 'إلغاء الحضور',
        'confirm_not_attend_description' => 'هل أنت متأكد من إلغاء حضور هذا المشارك؟',
    ],

    'export' => [
        'completed' => 'تم إكمال تصدير المشاركين، وتم تصدير :count :rows بنجاح.',
        'failed_to_export' => 'فشلت في التصدير',
        'success_statistics' => 'تم إكمال تصدير الإحصائيات وتم تصدير :count :rows بنجاح.'
    ],

    'filters' => [
        'attendance_status' => 'حالة الحضور',
        'all' => 'الكل',
        'attended' => 'حاضر',
        'not_attended' => 'غائب',
    ],
];
