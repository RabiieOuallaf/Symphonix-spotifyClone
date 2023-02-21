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
        Schema::create('band', function(Blueprint $table) {
            $table->id();
            $table->string('band_name');
            $table->string('band_image');
            $table->integer('band_memebers_id');
            $table->string('band_country');
            $table->date('band_creating_dae');
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
