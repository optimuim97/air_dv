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
        Schema::create('adresse_homes', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('user_id')->nullable();
            $table->float('lat')->nullable();
            $table->float('lon')->nullable();
            $table->string('adresse_name')->nullable();
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
        Schema::drop('adresse_homes');
    }
};
