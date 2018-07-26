<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i<20; $i++)
        {
            DB::table('images')->insert([
                'post_id'=>rand(1,20),
                'image'=>'image ('.rand(1,21).').jpg'
                
            ]);
        }
    }
}
