<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name', 'father_name', 'school', 'field', 'scholarship_fund', 'scholarship_type',
        'province', 'gender', 'program', 'degree', 'year', 'parents_status',
        'financial_support', 'monthly_income', 'current_status', 'financial_justification'
    ];
}
