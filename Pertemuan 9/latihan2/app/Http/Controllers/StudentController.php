<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $data['students'] = Student::all();
        return view('Student', $data);
    }

    public function create() {
        $data['gender'] = ["L", "P"];
        $data['departement'] = ["S1 RPL", "S1 Informatika", "S1 Sistem Informasi"];
        return view('studentTambah', $data);
    }

    public function store() {
        $students = new Student;
        $students->nim = request('nim');
        $students->name = request('name');
        $students->gender = request('gender');
        $students->departement = request('departement');
        $students->address = request('address');
        $students->save();

        return redirect() -> back() -> with('pesan', "Berhasil Input Data");
    }

    public function edit($id) {
        $data['student'] = Student::find($id);
        $data['gender'] = ["L", "P"];
        $data['departement'] = ["S1 RPL", "S1 Informatika", "S1 Sistem Informasi"];

        // $data = ['student'] = Student::where('nim', $id) -> first();
        return view('studentEdit', $data);
    }

    public function update(Request $request, $id) {
        $students = Student::find($id);
        $students->nim = request('nim');
        $students->name = request('name');
        $students->gender = request('gender');
        $students->departement = request('departement');
        $students->address = request('address');
        $students->save();

        return redirect() -> back() -> with('pesan', "Berhasil Update Data");
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return redirect() -> back() -> with('pesan', "Berhasil Hapus Data");
    }
}
