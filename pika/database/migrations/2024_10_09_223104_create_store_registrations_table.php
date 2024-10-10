<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('store_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('storename');
            $table->string('ownername');
            $table->string('stateOfOperation');
            $table->string('businessAddress');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('instagram');
            $table->string('twitter')->nullable();
            $table->string('website')->nullable();
            $table->string('referralink')->nullable();
            $table->string('email_verification_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('store_registrations');
    }
};