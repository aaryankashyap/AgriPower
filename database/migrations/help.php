<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('help', function (Blueprint $table) {
            $table->id();
            $table->string('Help_Name');
            $table->string('Help_Email');
            $table->string('Help_Subject');
            $table->text('Help_Message');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('help');
    }
}; 