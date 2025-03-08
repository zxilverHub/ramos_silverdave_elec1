<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //
    public function insert(Request $request)
    {
        $name = $request->input('name');
        DB::insert('INSERT INTO student (name) VALUES(?)', [$name]);
        return Redirect('/');
    }

    public function stud_view()
    {
        $studs = DB::select("SELECT * FROM student ORDER BY id ASC");
        return view('stud_view', ["students" => $studs]);
    }

    public function destroy($id)
    {
        DB::delete("DELETE FROM student WHERE id=?", [$id]);
        return Redirect('/');
    }

    public function goedit($id, $name)
    {
        return view('edit', ['id' => $id, 'name' => $name]);
    }

    public function edit(Request $request)
    {
        $name = $request->input('name');
        $id = $request->input('id');
        DB::update("UPDATE student SET name = ? WHERE id = ?", [$name, $id]);
        return Redirect('/');
    }
}
