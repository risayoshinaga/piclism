<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=> 'yatty', 'password' => Hash::make('SoneKiyotaka0908')],
            ['name'=> 'tsugumi', 'password' => Hash::make('SoneKiyotaka0908')],
            ['name'=> 'lisa', 'password' => Hash::make('SoneKiyotaka0908')],
            ['name'=> 'keisuke', 'password' => Hash::make('SoneKiyotaka0908')],
            ['name'=> 'sonetty', 'password' => Hash::make('SoneKiyotaka0908')],
            ['name'=> 'omizu', 'password' => Hash::make('SoneKiyotaka0908')],
            ];
        foreach ($users as $user){
            DB::table('users')->insert($user);
        }
    }
}
