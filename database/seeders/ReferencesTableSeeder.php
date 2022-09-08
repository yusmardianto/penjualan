<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('references')->delete();
        
        \DB::table('references')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'overtime_method',
                'name' => 'Salary / 173',
            'expression' => '(salary / 173) * overtime_duration_total',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'overtime_method',
                'name' => 'Fixed',
                'expression' => '10000 * overtime_duration_total',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}