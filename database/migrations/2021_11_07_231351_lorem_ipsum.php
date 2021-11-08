<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoremIpsum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lorem_ipsum', function (Blueprint $table) {
          $table->id();
          $table->text('lorem_paragraph');
          $table->string('lorem_title');
          $table->text('image_url');
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
        Schema::drop('lorem_ipsum');
    }
}
