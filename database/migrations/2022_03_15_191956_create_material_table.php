<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('isbn');
            $table->year('year');
            $table->integer('num_pages');
            $table->string('pdf');
            $table->string('img');

            $table->unsignedBigInteger('material_users_id');
            $table->foreign('material_users_id')->references('id')->on('material_users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('type_material_id');
            $table->foreign('type_material_id')->references('id')->on('type_materials')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('author_books_id');
            $table->foreign('author_books_id')->references('id')->on('author_books')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('editorial_id');
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('material_educational_leves_id');
            $table->foreign('material_educational_leves_id')->references('id')->on('material_educational_levels')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('books');
    }
}
