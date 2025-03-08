<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function insertform()
    {
        return view('stud_create');
    }

    public function insert(Request $request)
    {
        $name = $request->input("stud_name");
        DB::insert('INSERT INTO student (name) VALUES(?)', [$name]);
        // echo "Record inserted successfuly";
        // echo "<a href='insert'>Go back</a>";
        return Redirect('view-records');
    }

    public function index()
    {
        $users = DB::select("SELECT * FROM student");
        return view("stud_view", ["users" => $users]);
    }

    public function del($id)
    {
        DB::delete('DELETE FROM student WHERE id = ?', [$id]);
        return Redirect('view-records');
    }
}
