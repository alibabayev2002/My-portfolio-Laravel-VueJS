<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(['title'=>'MACBOOK 2020 artiq cixdi !! yaxin zamanda mutleq satisa cixarilacaqdir ',
        'slug'=>'ansk.nads',
        'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum amet pariatur minus nostrum natus debitis fuga perspiciatisLorem ipsum dolor sit amet consectetur adipisicing elit. Cum amet pariatur minus nostrum natus debitis fuga perspiciatis',
        'user_id'=>1,
        'category_id'=>1]);
        
    }
}
