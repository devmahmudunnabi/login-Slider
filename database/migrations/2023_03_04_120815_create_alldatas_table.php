<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alldatas', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->string("clientid");
            $table->string("token");
            $table->string("appname");
            $table->string("description");
            $table->string("url");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alldatas');
    }
};
