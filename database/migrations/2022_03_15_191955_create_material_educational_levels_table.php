<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialEducationalLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_educational_levels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('educational_level_id');
            $table->foreign('educational_level_id')->references('id')->on('educational_levels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_educational_levels');
    }
}
