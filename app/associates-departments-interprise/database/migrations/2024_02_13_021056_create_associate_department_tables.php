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
        Schema::create('departments', function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('name', 255);
        });
        Schema::create('associates', function(Blueprint $table) {
            $table->increments('id'); 
            $table->string('name', 255);
            $table->integer('salary');
            $table->integer('department_id');
            $table->index('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associates');
        Schema::dropIfExists('departments');
    }
};
