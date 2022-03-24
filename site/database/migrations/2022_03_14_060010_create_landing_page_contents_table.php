<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_contents', function (Blueprint $table) {
            $table->id();
            $table->mediumText('first_screen_title')->nullable();
            $table->longText('first_screen_description')->nullable();
            $table->mediumText('second_screen_title')->nullable();
            $table->longText('second_screen_description')->nullable();
            $table->longText('first_screen_block1')->nullable();
            $table->longText('first_screen_block2')->nullable();
            $table->longText('first_screen_block3')->nullable();
            $table->string('first_screen_img')->nullable();
            $table->string('second_screen_img')->nullable();
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
        Schema::dropIfExists('landing_page_contents');
    }
}
