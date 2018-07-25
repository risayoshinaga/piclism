<?php

use Illuminate\Database\Seeder;

class LendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lends =[
                ['camera_id'=>1, 'start'=> '2018-08-5', 'end'=> '2018-08-25'],
                ['camera_id'=>3, 'start'=> '2018-08-10', 'end'=> '2018-08-30'],
                ['camera_id'=>5, 'start'=> '2018-08-10', 'end'=> '2018-09-10'],
            ];
            
        foreach ($lends as $lend)
        {
            DB::table('lends')->insert($lend);
        }
    }
}
