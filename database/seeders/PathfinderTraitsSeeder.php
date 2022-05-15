<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PathfinderTraitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traits')->insert([
            'name'          => 'common',
            'trait_type_id' => 14,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'uncommon',
            'trait_type_id' => 14,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'rare',
            'trait_type_id' => 14,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'unique',
            'trait_type_id' => 14,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'magical',
            'trait_type_id' => null,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'transmutation',
            'trait_type_id' => 15,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'lg',
            'trait_type_id' => 15,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'divine',
            'trait_type_id' => 15,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'evocation',
            'trait_type_id' => 15,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);

        DB::table('traits')->insert([
            'name'          => 'intelligent',
            'trait_type_id' => 15,
            'created_by'    => 1,
            'created_at'    => now(),
        ]);
    }
}
