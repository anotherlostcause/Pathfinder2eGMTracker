<?php

namespace Database\Seeders;

use App\Models\PathfinderTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemAdventureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name'          => 'Anchor Spear',
            'price'         => 2800 * 100,
            'item_level'    => 13,
            'created_at'    => now(),
            'created_by'    => 1
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      => PathfinderTrait::where('name', 'uncommon')->first()->id,
            'trait_to_id'   => 1,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'magical')->first()->id,
            'trait_to_id'   => 1,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'transmutation')->first()->id,
            'trait_to_id'   => 1,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('links')->insert([
            'url'           => 'https://2e.aonprd.com/Equipment.aspx?ID=654',
            'link_type_id'  => 2,
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('link_to')->insert([
            'link_id'       => 1,
            'linkable_id'   => 1,
            'linkable_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('adventure_paths')->insert([
            'name'          => 'Extinction Curse',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('adventures')->insert([
            'name'          => 'Lord of the Black Sands',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('chapters')->insert([
            'name'          => 'Into the Black Desert',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        ###############################################

        DB::table('item_adventures')->insert([
            'item_id'           => 1,
            'quantity'          => 1,
            'notes'             => 'Viper\'s Fang attached',
            'adventure_path_id' => 1,
            'adventure_id'      => 1,
            'chapter_id'        => 1,
            'owner'             => 1,
        ]);

        DB::table('items')->insert([
            'name'          => 'Piereta',
            'price'         => null,
            'item_level'    => 20,
            'created_at'    => now(),
            'created_by'    => 1
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      => PathfinderTrait::where('name', 'unique')->first()->id,
            'trait_to_id'   => 2,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'lg')->first()->id,
            'trait_to_id'   => 2,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'divine')->first()->id,
            'trait_to_id'   => 2,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'evocation')->first()->id,
            'trait_to_id'   => 2,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('trait_to')->insert([
            'trait_id'      =>  PathfinderTrait::where('name', 'intelligent')->first()->id,
            'trait_to_id'   => 2,
            'trait_to_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('links')->insert([
            'url'           => 'https://2e.aonprd.com/Equipment.aspx?ID=666',
            'link_type_id'  => 2,
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('link_to')->insert([
            'link_id'       => 2,
            'linkable_id'   => 2,
            'linkable_type' => 'App\Models\Item',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('adventures')->insert([
            'name'          => 'The Apocalypse Prophet',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('chapters')->insert([
            'name'          => 'End of the Road',
            'created_at'    => now(),
            'created_by'    => 1,
        ]);

        DB::table('item_adventures')->insert([
            'item_id'           => 2,
            'quantity'          => 1,
            'adventure_path_id' => 1,
            'adventure_id'      => 2,
            'chapter_id'        => 2,
            'owner'             => 1,
        ]);
    }
}
