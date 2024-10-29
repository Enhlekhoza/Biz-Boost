<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('loan_options', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->float('interest_rate');
        $table->integer('min_amount');
        $table->integer('max_amount');
        $table->string('credit_level'); // "high", "medium", or "low"
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_options');
    }
};
