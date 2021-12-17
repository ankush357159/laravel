<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        // $students =  DB::select('select * from student');
        // $students =  DB::select('SELECT * FROM student WHERE city = ?', ['Nashik']);
        // $students =  DB::select('SELECT * FROM student WHERE id = ?', [103]);
        // dd($student);
        // $students =  DB::select('SELECT * FROM student WHERE city = :city', ['city'=>'Mumbai']);

        // DB::insert(
        //     'INSERT INTO student (name, email, city) 
        // VALUES (?,?,?)',
        //     ['Rohit', 'rohit@gmail.com', 'Chennai']
        // );

        //Named binding
        // DB::insert(
        //     'INSERT INTO student (name, email, city) 
        // VALUES (:name,:email,:city)',
        //     ['name' => 'Kunal', 'email' => 'kunal@gmail.com', 'city' => 'Mumbai']
        // );

        // $name = 'Gautam';
        // $email = 'gautam@gmail.com';
        // $city = 'Mumbai';

        // DB::insert(
        //     'INSERT INTO student (name, email, city) 
        // VALUES (:name,:email,:city)',
        //     ['name' => $name, 'email' => $email, 'city' => $city]
        // );

        // DB::update('UPDATE student SET city = ? WHERE id = ?', ['Chennai', 105]);
        // DB::update('UPDATE student SET city = :city WHERE id = :id', ['city' => 'Nashik', 'id' => 103]);

        // DB::delete('DELETE FROM student WHERE id = ?', [106]);
        // DB::delete('DELETE FROM student WHERE id = :id', ['id'=>107]);

        // DB::unprepared('DELETE FROM student WHERE id=101');

        DB::transaction(function() {
            DB::update('UPDATE student SET city = ? WHERE id = ?', ['Pune', 103]);
            DB::delete('DELETE FROM student WHERE id = ?', [102]);
        });


        $students =  DB::select('select * from student');
        return view('student', ['students' => $students]);
    }
}
