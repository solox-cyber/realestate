<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('features', function (Blueprint $table) {
            Schema::table('features', function (Blueprint $table) {
                $table->string('video')->nullable();
                $table->string('image')->nullable();
                $table->string('ground_rooms')->nullable();
                $table->string('ground_bath')->nullable();
                $table->string('ground_size')->nullable();
                $table->string('main_rooms')->nullable();
                $table->string('main_bath')->nullable();
                $table->string('main_size')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('features', function (Blueprint $table) {
            //
        });
    }
}
