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
        Schema::create('web_hostings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Duration');
            $table->string('unmeted');
            $table->string('storage');
            $table->string('support');
            $table->string('email');
            $table->string('domain');
            $table->string('builder');
            $table->decimal('price',8,2);
            $table->decimal('Discount',8,2)->nullable();
            $table->string('Status');
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
        Schema::dropIfExists('web_hostings');
    }
};
