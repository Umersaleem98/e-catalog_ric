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
        Schema::create('endowment_support_one_year', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('degree');
            $table->string('seats');
            $table->string('totalAmount');
            $table->string('donor_name');
            $table->string('donor_email');
            $table->string('phone');
            $table->string('payments_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endowment_support_one_year');
    }
};
