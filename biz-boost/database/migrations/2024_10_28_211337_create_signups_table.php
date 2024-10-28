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
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('idNumber', 13);
            $table->date('dob');
            $table->text('address');
            $table->string('contactNumber', 15);
            $table->string('businessType')->nullable();
            $table->string('registeredBusiness')->nullable();
            $table->string('operationalDuration')->nullable();
            $table->string('pep')->nullable();
            $table->string('businessIncome')->nullable();
            $table->string('taxId')->nullable();
            $table->string('bankAccount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};