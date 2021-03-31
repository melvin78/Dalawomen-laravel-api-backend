<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_account', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('cop_loan', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('emergency', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('host_account', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('penalties', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('meeting', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('minutes', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('shares', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('wef', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('welfare', function (Blueprint $table) {
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
        Schema::table('cash_account', function (Blueprint $table) {
            //
        });
    }
}
