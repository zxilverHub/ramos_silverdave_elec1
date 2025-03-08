<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudInsertController extends Controller
{
    //
    public function insertform()
    {
        return view('stud_create');
    }

    public function insert(Request $request)
    {
        $name = $request->input("stud_name");
        DB::insert('INSERT INTO student (name) VALUES(?)', [$name]);
        echo "Record inserted successfuly";
        echo "<a href='public/insert'>Go back</a>";
    }
}
