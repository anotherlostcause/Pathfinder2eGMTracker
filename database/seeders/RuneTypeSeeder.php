<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class RuneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rune_types')->insert([
            'name'  => 'fundamental',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('rune_types')->insert([
            'name'  => 'property',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('rune_types')->insert([
            'name'  => 'accessory',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
    }
}
