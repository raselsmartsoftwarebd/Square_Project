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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('maintitle')->nullable();
            $table->string('firstsubtitle')->nullable();
            $table->longtext('firstdescription')->nullable();
            $table->string('secondsubtitle')->nullable();
            $table->longtext('seconddescription')->nullable();
            $table->string('thirdsubtitle')->nullable();
            $table->longtext('thirddescription')->nullable();
            $table->string('image')->nullable();
            $table->tinyinteger('status')->default(1)->nullable();
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
        Schema::dropIfExists('journeys');
    }
};
