<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_tag', function (Blueprint $table) {
            // Pivot table to Cars table
            $table->unsignedBigInteger("car_id");
            $table->foreign("car_id")
                  ->references("id")
                  ->on("cars");

            // Pivot table to Tags table
            $table->unsignedBigInteger("tag_id");
            $table->foreign("tag_id")
                  ->references("id")
                  ->on("tags");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_tag');
    }
}
