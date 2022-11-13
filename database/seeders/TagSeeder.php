<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<4; $i++){

            Tag::create([
                'title' => 'tag_'.$i,
                'title_en' => 'tag_en_'.$i,
                'title_ru' => 'tag_ru_'.$i 
            ]);
           
        }
        
    }
}
