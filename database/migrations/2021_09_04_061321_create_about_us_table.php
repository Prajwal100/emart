<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->integer('experience')->default(3);
            $table->integer('happy_customer')->default(500);
            $table->integer('team_advisor')->default(200);
            $table->integer('return_customer')->default(70);
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
        Schema::dropIfExists('about_us');
    }
}
