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
             $table->id();
             $table->string('name',120);
             $table->string('email',80)->unique();
             $table->string('phone',14);
             $table->timestamp('birthdate');
             $table->string('adress',80);
             $table->string('complement',80)->nullable;
             $table->string('district',80);
             $table->string('zipcode',8);
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
