<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLandingPageContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landing_page_contents', function (Blueprint $table) {
            $table->string('contact_form_title');
            $table->longText('contact_form_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landing_page_contents', function (Blueprint $table) {
            $table->dropColumn('contact_form_title');
            $table->dropColumn('contact_form_text');
        });
    }
}
