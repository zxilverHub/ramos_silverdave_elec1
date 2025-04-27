<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::all();

        if ($request->input("search") != null) {
            $students = Student::where('fullname', 'like', "%" . $request->input("search") . "%")->get();
        }


        $qrcodes = [];
        foreach ($students as $student) {
            $studentdata =
                'ID: ' . $student->id . "\n" .
                'Full Name: ' . $student->fullname . "\n" .
                'Program: ' . $student->program . "\n" .
                'Year Level: ' . $student->year_level . "\n" .
                'Address: ' . $student->address;
            $qrcodes[] = QrCode::size(400)->backgroundColor(255, 90, 0)->generate($studentdata);
            $student = "";
        }

        return view('index', ['qrcodes' => $qrcodes, "students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
