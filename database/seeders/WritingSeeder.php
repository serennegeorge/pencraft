<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WritingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('writings')->insert([
            [
                'user_id' => 1,
                'type' => 'poem',
                'title' => 'Programming can be frustrating',
                'description' => 'hello world, goodbye world, oh I\'m confused because programming hurts',
                'image' => '/images/media/default.jpg',
                'read_time' => 1,
                'read_unit' => 'minute',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);


    }
}