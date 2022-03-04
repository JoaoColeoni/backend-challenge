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
        Schema::create('clients', function (Blueprint $table) {
            $table->autoIncrement('id');
            $table->string('name',120);
            $table->unique('email');
            $table->string('phone',14);
            $table->timestamp('birthdate');
            $table->string('adress',80);
            $table->string('complement',80)->nullable;
            $table->string('district',80);
            $table->string('zipcode',8);
            $table->timestamps('registration_date');
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
        Schema::dropIfExists('clients');
    }
};
