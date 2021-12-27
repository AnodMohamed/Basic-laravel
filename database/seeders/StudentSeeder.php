<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     protected $students =[
         [
             'name'=>'Mr.Mohamemd',
             'email'=>'mohamed@gmail.com',
             'department'=>'Sience'
         ],
         [
            'name'=>'Mr.Ahmed',
            'email'=>'Ahmed@gmail.com',
            'department'=>'IT'
         ],
     ];

    public function run()
    {
        foreach($this-> students as $student){
        //
            $students = New Student($student);
            $students->save();
        }
    }
}
