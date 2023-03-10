<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('facebook');
            $table->text('instragram');
            $table->text('youtube');
            $table->text('fbpage');
            $table->text('footer_description');
            $table->text('contact');
            $table->longText('privacy');
            $table->longText('return');
            $table->longText('term');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['facebook','instragram','youtube','fbpage','footer_description','contact','privacy','return','term']);
        });
    }
};
