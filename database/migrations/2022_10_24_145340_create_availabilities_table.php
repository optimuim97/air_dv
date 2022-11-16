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
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->bigInteger("user_id");
            $table->string("start_date");
            $table->string("end_date");
            $table->dateTime("start_time_date");
            $table->string("start_time");
            $table->dateTime("end_time_date");
            $table->string("end_time");
            $table->string("unique_code");
            $table->boolean("is_schedule")->default(true);
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
        Schema::dropIfExists('availabilities');
    }
};
