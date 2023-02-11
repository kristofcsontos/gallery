<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'galleryName' => 'Sport',
                'galleryImageName' => 'sport.png',
                'created_at' => now(),
                'updated_at' => now()
                
            ],
            [
                'galleryName' => 'Étel',
                'galleryImageName' => 'kaja.png',
                'created_at' => now(),
                'updated_at' => now()
                
            ],
            [
                'galleryName' => 'Helyek',
                'galleryImageName' => 'taj.png',
                'created_at' => now(),
                'updated_at' => now()
                
            ],
        ]);
    }
}
