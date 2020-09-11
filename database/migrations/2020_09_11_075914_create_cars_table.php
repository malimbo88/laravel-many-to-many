<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            // Preset id
            $table->id();

            // Foreign key to User
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
                  ->references("id")
                  ->on("users");

            // Manufacturer
            $table->string("manufacturer");

            // Model
            $table->string("model");

            // Engine
            $table->string("engine");

            // Plate
            $table->string("plate");

            // Year
            $table->year("year");

            // Price
            $table->float("price", 9, 2);

            // Preset created_at & updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
