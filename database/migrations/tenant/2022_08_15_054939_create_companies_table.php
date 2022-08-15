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
    public function up():void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->uuid(column:'uuid')->unique();
            $table->string(column:'name');
            $table->string(column:'email')->unique();
            $table->string(column:'phone');
            $table->string(column:'website');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('companies');
    }
};
