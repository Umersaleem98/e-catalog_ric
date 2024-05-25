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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('qalam_id')->unique();
            $table->string('name');
            $table->string('father_name');
            $table->string('institution');
            $table->string('discipline');
            $table->string('scholarship_name');
            $table->string('donor_name')->nullable();
            $table->string('province');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('program');
            $table->string('degree');
            $table->year('year_of_admission');
            $table->enum('father_status', ['Alive', 'Deceased']);
            $table->string('father_profession');
            $table->decimal('monthly_income', 10, 2); // Assuming the income might be a decimal value
            $table->text('statement_of_purpose')->nullable(); // Assuming it can be a long text
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
