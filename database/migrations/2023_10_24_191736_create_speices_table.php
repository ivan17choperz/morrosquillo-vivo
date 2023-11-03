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
        Schema::create('speices', function (Blueprint $table) {
            $table->id();
            $table->string('name_scientific');
            $table->string('name_common');
            $table->text('description');
            $table->string('clas_tax');
            $table->string('averange_size');
            $table->string('url');
            $table->string('references');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speices');
    }
};
