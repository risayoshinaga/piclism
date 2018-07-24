<?php

use Illuminate\Database\Seeder;

class BorrowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrows =[
                ['camera_id'=>1, 'user_id'=>2, 'start'=> '2018-08-10', 'end'=> '2018-08-15'],
                ['camera_id'=>3, 'user_id'=>4, 'start'=> '2018-08-15', 'end'=> '2018-08-20'],
                ['camera_id'=>5, 'user_id'=>6, 'start'=> '2018-08-10', 'end'=> '2018-08-15'],
            ];
            
        foreach ($borrows as $borrow)
        {
            DB::table('borrows')->insert($borrow);   
        }
    }
}
