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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('creator_id')->nullable();
            $table->bigInteger('other_id')->nullable();
            $table->date('date')->nullable()->comment("YYYY-MM-DD");
            $table->time('hour')->nullable();
            $table->string('date_time')->nullable()->comment("YYYY-MM-DD HH:MI:SS");
            $table->string('unique_id');
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_report')->default(false);
            $table->boolean('is_cancel')->default(false);
            $table->datetime('report_date')->nullable();
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
        Schema::drop('appointments');
    }
};
