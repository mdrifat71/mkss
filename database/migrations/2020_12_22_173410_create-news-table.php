<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("title",100);
            $table->unsignedBigInteger("newscategoryid");
            $table->string("description",15000);
            $table->string("image", 50);
            $table->timestamps();
            $table->foreign("newscategoryid")->references("id")->on("newscategory");
            $table->string("imagecaption",200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists("news");
    }
}
