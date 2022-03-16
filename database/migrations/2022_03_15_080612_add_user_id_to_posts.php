<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::table('posts', function (Blueprint $table) {
=======
        Schema::table('posts', function ($table) {
>>>>>>> 0d0ac59bf03ad9a8a642413d6cec3759149b8896
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('posts', function (Blueprint $table) {
=======
        Schema::table('posts', function ($table) {
>>>>>>> 0d0ac59bf03ad9a8a642413d6cec3759149b8896
            $table->dropColumn('user_id');
        });
    }
}
