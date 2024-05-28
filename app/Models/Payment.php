<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'donor_name',
        'card_on_name',
        'donor_email',
        'cnic_number',
        'card_number',
        'card_cvc',
        'duration',
        'amount',
        'prove',
    ];
}
