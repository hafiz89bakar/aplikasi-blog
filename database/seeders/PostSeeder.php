<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Contoh Post 1',
                'content' => 'Ini adalah konten untuk contoh post 1.',
                'image' => 'https://picsum.photos/400/200?random=1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Post 2',
                'content' => 'Ini adalah konten untuk contoh post 2.',
                'image' => 'https://picsum.photos/400/200?random=2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Post 3',
                'content' => 'Ini adalah konten untuk contoh post 3.',
                'image' => 'https://picsum.photos/400/200?random=3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contoh Post 4',
                'content' => 'Ini adalah konten untuk contoh post 4.',
                'image' => 'https://picsum.photos/400/200?random=4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [   'title' => 'Contoh Post 5',
                'content' => 'Ini adalah konten untuk contoh post 5.',
                'image' => 'https://picsum.photos/400/200?random=5',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
