<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_adventures', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->unsigned();
            $table->text('appearance');
            $table->text('notes');
            $table->tinytext('adventure_path');
            $table->tinytext('adventure');
            $table->tinytext('chapter');
            $table->boolean('found')->default(false);
            $table->boolean('identified')->default(false);
            $table->boolean('priced')->default(false);
            $table->bigInteger('owner')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_adventures');
    }
}
