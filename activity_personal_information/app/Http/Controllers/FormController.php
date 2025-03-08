<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function form(Request $request)
    {
        $validate = $request->validate([
            "fname" => "required|min:1|max:50",
            "lname" => "required|min:1|max:50",
            "phone" => [
                'required',
                'regex:/^09\d{2}-\d{3}-\d{3}$/'
            ],
            "tel" => "numeric",
            "date" => "required|date|date_format:Y-m-d",
            "addr" => "max:100",
            "email" => "required|email",
            "website" => "required|url"
        ]);

        return back()->with('success', 'Submitted successfuly!');
    }
}
