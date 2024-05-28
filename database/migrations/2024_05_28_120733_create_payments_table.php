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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('donor_name');
            $table->string('card_on_name');
            $table->string('donor_email');
            $table->string('cnic_number');
            $table->string('card_number');
            $table->string('card_cvc');
            $table->integer('duration');
            $table->decimal('amount', 10, 2);
            $table->string('prove');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
