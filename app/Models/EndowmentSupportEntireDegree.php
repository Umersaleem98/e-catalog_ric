<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndowmentSupportEntireDegree extends Model
{
    use HasFactory;

    protected $table = 'endowment_support_entire_degree';
    protected $fillable = [
        'program',
        'degree',
        'seats',
        'degree_name',
        'totalAmount',
        'donor_name',
        'donor_email',
        'phone',
        'payments_status',
    ];

}
