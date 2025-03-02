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
        Schema::create('_employee', function (Blueprint $table) {
            $table->bigIncrements('id');  // This will be the auto_increment primary key
            $table->string('Name', 20);
            $table->string('email', 191);
            $table->string('Position', 25);
            $table->integer('Age');  // No auto_increment here
            $table->integer('Salary');  // No auto_increment here
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employee');
    }
};
