<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyAreWesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_are_wes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slogan');
            $table->string('image_service_1');
            $table->string('title_service_1');
            $table->string('description_service_1');
            $table->string('image_service_2');
            $table->string('title_service_2');
            $table->string('description_service_2');
            $table->string('image_service_3');
            $table->string('title_service_3');
            $table->string('description_service_3');
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
        Schema::dropIfExists('why_are_wes');
    }
}
