<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->longText('details');
            $table->string('price');
            $table->string('new_discount')->default(0);
            $table->string('renew_discount')->default(0);
            $table->string('month');
            $table->integer('front_view')->default(0);
            $table->integer('junk')->default(0);
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
        Schema::dropIfExists('pacages');
    }
}
