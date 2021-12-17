<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show() {
        $students = '';

        //Retrieve all rows from a table
        // $students =  DB::table('student_table')->get();
        // $students = DB::table('student_table')->first(); 
        // $students = DB::table('student_table')->where('city','Thane')->first(); 
        // $students = DB::table('student_table')->where('city','Thane')->value('id'); 
        // $students = DB::table('student_table')->find(4); 
        // $students = DB::table('student_table')->pluck('name','email'); 
        
        //Chunking results
        // $students = DB::table('student_table')->orderBy('name')->chunk(2, function($students){
        //     echo 'chunk of data <br>';
        //     foreach ($students as $stu) {
        //         echo $stu->name;
        //         echo '<br>'; 
                
        //     }
        //     // return false;
            
        // }); 

        //Insert Data
        DB::table('student_table')->insert([
            ['name'=>'Luraj',
            'email'=>'luraj@gmail.com', 
            'city'=>'Garh', 
            'marks'=>205, 
            'pass_date'=>'2019-8-14'],

            ['name'=>'Muraj',
            'email'=>'muraj@gmail.com', 
            'city'=>'June', 
            'marks'=>206, 
            'pass_date'=>'2019-9-14'],

        ]);

        //Update data
        //   DB::table('student_table')->where('id',2)->update([
        //       'name'=>'Jamal',
        //       'email'=>'jam@gmail.com'
        //   ]);

        //Delete Data
        // DB::table('student_table')->where('id',2)->delete();

        // //Delete all data
        // DB::table('student_table')->truncate();

        
        dd($students);
        return view('student', ['students'=>$students]);
    }
}
