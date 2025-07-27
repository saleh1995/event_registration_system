<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Validate the locale
        if (!in_array($locale, ['ar', 'en'])) {
            abort(400);
        }

        // Store the locale in session
        session()->put('locale', $locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
