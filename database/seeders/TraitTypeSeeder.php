<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('trait_types')->insert([
           'name'           => 'alignment',
           'created_by'     => User::find(1)->id,
           'created_at'     => now()
       ]);
        DB::table('trait_types')->insert([
            'name'          => 'ancestry',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'armor',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'class',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'class-specific',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'creature type',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'elemental',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'energy',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'equipment',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'hazard',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'monster',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'planar',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'poison',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'rarity',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'school',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'sense',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'settlement',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'tradition',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('trait_types')->insert([
            'name'          => 'weapon',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
    }
}
