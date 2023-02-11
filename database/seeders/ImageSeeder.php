<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('image')->insert([
        [
            'imageName' => 'labdarúgás',
            'galleryId' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'kosárlabda',
            'galleryId' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'rántotta',
            'galleryId' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'imageName' => 'röplabda',
            'galleryId' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'kézilabda',
            'galleryId' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'tenisz',
            'galleryId' => 1,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'hamburger',
            'galleryId' => 2,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'gyros',
            'galleryId' => 2,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'lángos',
            'galleryId' => 2,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'krumplistészta',
            'galleryId' => 2,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'hősöktere',
            'galleryId' => 3,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'esterházykastély',
            'galleryId' => 3,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'egrivár',
            'galleryId' => 3,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'tűztorony',
            'galleryId' => 3,
            'created_at' => now(),
            'updated_at' => now()
            
        ],
        [
            'imageName' => 'esztergomibazilika',
            'galleryId' => 3,
            'created_at' => now(),
            'updated_at' => now()
            
        ]
        ]);
       
    }
}
