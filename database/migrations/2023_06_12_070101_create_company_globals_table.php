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
        Schema::create('company_globals', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longtext('leftDescription')->nullable();
            $table->longtext('rightDescription')->nullable();
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
        Schema::dropIfExists('company_globals');
    }
};
