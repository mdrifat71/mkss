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
            $table->string("description",1000);
            $table->string("image", 50);
            $table->timestamps();
            $table->foreign("newscategoryid")->references("id")->on("newscategory");
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
}
