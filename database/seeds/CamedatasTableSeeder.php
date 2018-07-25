<?php

use Illuminate\Database\Seeder;

class CamedatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
                ['camera_id' => 1,'scene' => null,'lens' => null ,'year' => null],
                ['camera_id' => 2,'scene' => null,'lens' => null ,'year' => null],
                ['camera_id' => 3,'scene' => null,'lens' => null ,'year' => null],
                ['camera_id' => 4,'scene' => null,'lens' => null ,'year' => null],
                ['camera_id' => 5,'scene' => null,'lens' => null ,'year' => null],
                ['camera_id' => 6,'scene' => null,'lens' => null ,'year' => null],
            ];
        foreach ($datas as $data)
        {
            DB::table('camedatas')->insert($data);
        }
    }
}
