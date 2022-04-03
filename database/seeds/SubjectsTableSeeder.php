<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name'       => 'CIVIL'
        ]);
        Subject::create([
            'name'       => 'LABORAL'
        ]);
        Subject::create([
            'name'       => 'PENAL'
        ]);
        Subject::create([
            'name'       => 'ADMINISTRATIVO'
        ]);
    }
}
