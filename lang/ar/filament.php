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
        'roles' => 'الأدوار',
    ],

    'orphan' => [
        'singular' => 'يتيم',
        'plural' => 'الأيتام',
        'navigation' => 'الأيتام',

        'name' => 'اسم اليتيم',
        'gender' => 'الجنس',
        'birth_date' => 'تاريخ الميلاد',
        'phone' => 'رقم الهاتف',
        'address' => 'العنوان',

        'siblings_count' => 'عدد الإخوة',
        'mother_name' => 'اسم الأم',
        'mother_status' => 'حالة الأم',
        'mother_job' => 'عمل الأم',

        'father_job_before_death' => 'مهنة الأب قبل الوفاة',
        'father_death_date' => 'تاريخ وفاة الأب',
        'guardian_job' => 'مهنة الوصي',
        'guardian_name' => 'اسم الوصي',
        'guardian_relation' => 'علاقة الوصي',

        'education_level' => 'مستوى التعليم',
        'grade' => 'الصف',
        'health_status' => 'الحالة الصحية',
        'reason_not_studying' => 'سبب عدم الدراسة',

        'housing_type' => 'نوع السكن',
        'housing_condition' => 'حالة السكن',
        'monthly_income' => 'الدخل الشهري',

        'social_worker_notes' => 'ملاحظات الباحث الاجتماعي',

        'sponsorship_amount' => 'مبلغ الكفالة المطلوبة',
        'sponsorship_type' => 'نوع الكفالة',

        'status' => 'الحالة',

        // Wizard step titles
        'information' => 'معلومات اليتيم',
        'family_status' => 'الوضع الأسري',
        'father_guardian_info' => 'بيانات الأب والوصي',
        'health_education' => 'الوضع الصحي والتعليمي',
        'living_status' => 'الوضع المعيشي',
    ],

    'enums' => [

        'gender' => [
            'male' => 'ذكر',
            'female' => 'أنثى',
        ],

        'sponsorship_type' => [
            'monthly' => 'شهري',
            'yearly' => 'سنوي',
        ],

        'orphan_status' => [
            'under_review' => 'قيد المراجعة',
            'approved' => 'موافق عليه',
            'rejected' => 'مرفوض',
            'needs_revision' => 'بحاجة لتعديل',
        ],
    ],
];
