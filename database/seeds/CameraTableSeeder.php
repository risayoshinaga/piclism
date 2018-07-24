<?php

use Illuminate\Database\Seeder;

class CameraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cameras = [
                ['user_id' => 1, 'price' => 3000, 'name' => "PENTAX K-70", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' =>'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532425635/app/cameras/agyppzq1tkooefyzgf9g.jpg'],
                ['user_id' => 2, 'price' => 1500, 'name' => "LUMIX", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' => 'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532345222/app/cameras/pqt5edi9jy5xsesvllry.jpg'],
                ['user_id' => 3, 'price' => 4000, 'name' => "Canon Kiss7x", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' => 'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532321752/app/cameras/xnfb0xajl3s8m4iowkmb.jpg'],
                ['user_id' => 4, 'price' => 10000, 'name' => "RICOH 500GX", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' => 'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532408789/app/cameras/tycwcep9p5xgvb81pk25.jpg'],
                ['user_id' => 5, 'price' => 7000, 'name' => "Go Pro", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' => 'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532071129/app/cameras/yzs5q3teu3n6ryivbdnz.jpg'],
                ['user_id' => 6, 'price' => 1000, 'name' => "OLYMPUS PEN", 'created_at' => new DateTime(), 'updated_at' => new DateTime(), 'url' => 'https://res.cloudinary.com/dalfnbfxr/image/upload/v1532392521/app/cameras/vs4n2yrkgsyybxrytkke.jpg']
            ];

        foreach ($cameras as $camera)
        {
            DB::table('cameras')->insert($camera);
        }
    }
}
