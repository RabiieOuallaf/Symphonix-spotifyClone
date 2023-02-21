<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function(Blueprint $table) {
            $table->id('song_id');
            $table->integer('playlist_id');
            $table->string('artist_name', 150);
            $table->text('brand_name');
            $table->string('song_name');
            $table->string('langauge');
            $table->date('creating_date');
            $table->date('song_duration');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
