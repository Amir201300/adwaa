<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_uses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('about_us')->nullable();
            $table->string('our_phone')->nullable();
            $table->string('our_email')->nullable();
            $table->string('our_vision')->nullable();
            $table->string('our_massage')->nullable();
            $table->string('our_goals')->nullable();
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
        Schema::dropIfExists('about_uses');
    }
}
