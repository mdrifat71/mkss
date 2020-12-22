<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title",150);
            $table->integer("from");
            $table->integer("to");
            $table->longText("description");
            $table->string("image",100);
            $table->integer("status");
            $table->string("area")->nullable();
            $table->unsignedBigInteger("sectorid");
            $table->foreign("sectorid")->references("id")->on("sectors");
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
        //Schema::dropIfExists('projects');
    }
}
