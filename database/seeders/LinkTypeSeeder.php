<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_types')->insert([
            'name'          => 'armor',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('link_types')->insert([
            'name'   => 'equipment',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('link_types')->insert([
            'name'   => 'feats',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('link_types')->insert([
            'name'   => 'rituals',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('link_types')->insert([
            'name'   => 'rules',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
        DB::table('link_types')->insert([
            'name'   => 'spells',
            'created_by'    => User::find(1)->id,
            'created_at'    => now()
        ]);
    }
}
